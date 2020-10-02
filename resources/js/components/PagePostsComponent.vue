<template>
    <div class="mt-5">
        
      <b-row class="mt-2">
        <b-col>
          Show <b-form-select class="form-control w-25" v-model="perPage" id="perPageSelect" :options="pageOptions"></b-form-select> entries
        </b-col>
        <b-col>
          <div class="inner-addon left-addon  float-right">
                <i class="fas fa-search search-icon"></i>
                <input v-model="filter" type="text" class="form-control shadow-sm " placeholder="Search...">
            </div>
        </b-col>
      </b-row>

      <b-table id="page-posts-table" class="mt-2" :items="posts" :per-page="perPage" thead-class="hidden_header" :current-page="currentPage" :fields="fields" hover  :filter="filter" @filtered="onFiltered">
            <template v-slot:cell(status)="row">
               <i class="fas fa-eye-slash text-danger" v-if="!row.item.visible"></i>
            </template> 

            <template v-slot:cell(pin_status)="row">
               <i class="fas fa-thumbtack text-secondary" v-if="row.item.pin_top"></i>
            </template> 
            
            <template v-slot:cell(likes_count)="row">
                <i class="fas fa-heart"></i> {{ row.item.likes_count }}
            </template>
            
            <template v-slot:cell(comments_count)="row">
                <i class="fas fa-comment"></i> {{ row.item.comments_count }}
            </template> 

            <template v-slot:cell(shares_count)="row">
                <i class="fas fa-share"></i> {{ row.item.shares_count }}
            </template> 


            <template v-slot:cell(post_views)="row">
                <i class="fas fa-eye"></i> {{ row.item.post_views_count }}
            </template> 


            <template v-slot:cell(user)="row">
                <img :src="row.item.user.profile_photo_url" class="rounded-circle img-28 border object-fit-cover" alt="profile_photo"> {{ row.item.user.name }}
            </template> 

        <template v-slot:cell(action)="row">
              <div class="dropdown">
                <button class="btn btn-link text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="dropdownMenuButton">

                    <button class="dropdown-item" @click="changePinStatus(row.item.id)" >
                      <i class="fas fa-thumbtack"></i>
                        <span v-if="row.item.pin_top"> Unpin</span>  
                        <span  v-else> Pin to Top</span>
                    </button>
                    
                    <button class="dropdown-item" @click="changePostStatus(row.item.id)" >
                      <span v-if="row.item.visible"><i class="fas fa-eye-slash"></i> Hide</span>  
                        <span  v-else><i class="fas fa-eye"></i> show</span>
                    
                    </button>
                    <a class="dropdown-item" :href="'/pages/'+pageId+'/posts/'+row.item.id"><i class="fas fa-edit"></i> Edit</a>
                    <hr class="dropdown-divider">
                    <button class="dropdown-item" @click="deletePost(row.item.id)"> <i class="fas fa-trash"></i> Delete</button>
                </div>
            </div>
        </template>  
      </b-table>
      <div class="text-center" v-if="!dataLoaded">
        <b-spinner variant="primary"></b-spinner>
      </div>
        <p class="text-center" v-if="totalRows == 0 && dataLoaded">No data available in table</p>

      <b-pagination v-model="currentPage" :total-rows="totalRows" :per-page="perPage" align="right" first-text="First" prev-text="Prev" next-text="Next" last-text="Last" class="mt-1"></b-pagination>
    </div>
</template>

<script>
    export default {
        props: ['pageId'],

          data(){
            return {
                
                posts: [],
                fields: [
                    {key:'title', label:'Title', sortable: true, },
                    {key:'status', label:'Status', sortable: true, },
                    {key:'pin_status', label:'Pin Status', sortable: true, },
                    {key:'likes_count', label:'', sortable: true, },
                    {key:'comments_count', label:'', sortable: true, },
                    {key:'shares_count', label:'', sortable: true, },
                    {key:'post_views', label:'', sortable: true, },
                    {key:'user', label:'', sortable: true, },
                    {key:'created_at', label:'', sortable: true, },
                    {key:'action', label:'' }
                ],
                totalRows: 0,
                currentPage: 1,
                perPage:  10,
                pageOptions: [10, 25, 50, 100, 200],
                filter: null,
                dataLoaded : false,
                
            }
            },
        mounted() {
            //console.log('Component mounted.')
        },
        methods:{

            makeToast(title, text, variant) {
                this.$bvToast.toast(text, {
                title: title,
                variant: variant,
                autoHideDelay: 1000,
                solid: true
                })
            },
        // fetch data
            getPagePosts() {
            axios
                .get('/pages/'+this.pageId+'/posts/all')
                .then((response) => {
                    this.posts = response.data.data;
                
                    // Set the initial number of items
                    this.totalRows = this.posts.length;
                    this.dataLoaded = true;
                })
                .catch((error) => {
                     this.makeToast('Error','Something went wrong, error: '+ error.response.status, 'danger');
                     this.dataLoaded = true;
                });
            },
            changePostStatus(post_id) {
            axios
                .put('/pages/'+this.pageId+'/posts/'+post_id+'/status')
                .then((response) => {
                     this.getPagePosts()
                })
                .catch((error) => {
                     this.makeToast('Error','Something went wrong, error: '+ error.response.status, 'danger');
                     this.dataLoaded = true;
                });
            },

            changePinStatus(post_id) {
            axios
                .put('/pages/'+this.pageId+'/posts/'+post_id+'/pin_status')
                .then((response) => {
                     this.getPagePosts()
                })
                .catch((error) => {
                     this.makeToast('Error','Something went wrong, error: '+ error.response.status, 'danger');
                     this.dataLoaded = true;
                });
            },
            // delete data
            deletePost(post_id) {
                
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                focusCancel: true
            }).then((result) => {
                if (result.value) {
                axios.delete('/pages/'+this.pageId+'/posts/'+post_id).then(response => {
                if(response.status == 200){
                    this.makeToast('Deleted','Post deleted','success')
                    this.getPagePosts()
                }
                }).catch( error => {
                    if(error.response.status == 403){
                        Swal.fire('Unauthorized Action', 'You can not delete posts', 'warning');
                    }else{
                        this.makeToast('Error','Something went wrong, error: '+ error.response.status, 'danger')
                    }
                    
                });
                }
            })
                ;
            },
            // Trigger pagination to update the number of buttons/pages due to filtering
            onFiltered(filteredItems) {
                this.totalRows = filteredItems.length
                this.currentPage = 1
            },
        },
        created: function(){
            this.getPagePosts();
         
        },
    
    computed: {
    } 
    }
</script>
<style>
.hidden_header {
  display: none;
}
</style>