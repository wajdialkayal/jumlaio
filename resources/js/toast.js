window.make_toast = {

    uri: 'jquery-toast-message/',
    msgTop: 50,
    zIndex: 12580,
    duration: 1000,
    starTop: -50,

    success: function (msg, duration) {
        duration = typeof duration === 'undefined' ? this.duration : duration;
        var message = this._generatingMessage('success', msg);
        return this._end(message, duration);
    },

    warning: function (msg, duration) {
        duration = typeof duration === 'undefined' ? this.duration : duration;
        var message = this._generatingMessage('warning', msg);
        return this._end(message, duration);
    },

    error: function (msg, duration) {
        duration = typeof duration === 'undefined' ? this.duration : duration;
        var message = this._generatingMessage('error', msg);
        return this._end(message, duration);
    },

    info: function (msg, duration) {
        duration = typeof duration === 'undefined' ? this.duration : duration;
        var message = this._generatingMessage('info', msg);
        return this._end(message, duration);
    },

    loading: function (msg, duration) {
        duration = typeof duration === 'undefined' ? this.duration : duration;
        var message = this._generatingMessage('loading', msg);
        return this._end(message, duration);
    },

    _generatingMessage: function (type, msg) {
        this._init();
        var message = {};
        var _id = this._randomString();
        message['obj'] = '[kk="' + _id + '"]';
        message['html'] = this._generatingMessageHtml(type, msg, _id);
        var me = this;
        message['remove'] = function () {
            me._remove(message['obj']);
        };
        message['text'] = function (msg) {
            $('.toast-message').find(message['obj']).find('.text').html(msg);
        };
        return message;
    },

    _generatingMessageHtml: function (type, msg, obj) {
        var html = '<div class="toast-message-notice" kk="' + obj + '" style="margin: 8px 0; width: 100%; margin-top: -' + this.starTop + 'px; opacity: 0;">';
        html += '<div class="bg-dark text-light rounded-pill shadow-sm" style="display: inline-block; padding: 10px 20px; border-radius: 4px; box-shadow: 0 1px 6px rgba(0,0,0,.2); background: #fff;">';
        html += '<i style="margin-right: 10px; font-size: 16px; vertical-align: middle; ">';
        switch(type) {
            case 'success':
                html += '<i class="fas fa-check-circle text-success"></i>';
                break;
            case 'warning':
                html += '<i class="fas fa-exclamation-triangle text-warning"></i>';
                break;
            case 'error':
                html += '<i class="fas fa-times-circle text-danger"></i>';
                break;
            case 'loading':
                html += '<i class="fas fa-spinner"></i>';
                break;
            default:
                html += '<i class="fas fa-info-circle text-info"></i>';
                break;
        }
        html += '</i>';
        html += '<span class="text">' + msg + '</span>';
        html += '<div>';
        html += '<div>';
        return html;
    },

    _remove: function (obj) {
        $('.toast-message').find(obj).animate({marginTop: '0px', opacity: 0}, 300, function () {
            $('.toast-message').find(obj).remove();
        });
    },

    _randomString: function (len) {
        len = len || 32;
        var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';
        var maxPos = $chars.length;
        var ret = '';
        var time = new Date().getTime().toString();
        if (len / 2 > time.length) {
            len = len - time.length;
        } else {
            len = len / 2;
        }
        for (var i = 0; i < len; i++) {
            ret += $chars.charAt(Math.floor(Math.random() * maxPos));
            if (time[i]) {
                ret += time[time.length - i - 1];
            }
        }
        return ret;
    },

    _init: function () {
        if ($('.toast-message').length === 0) {
            var html = '<div class="toast-message" style="bottom:0px; width: 100%; z-index: ' + this.zIndex + '; font-size: 14px; position: fixed; padding: 8px; text-align: center;"></div><style>@keyframes ani-load-loop{0%{transform:rotate(0)}50%{transform:rotate(180deg)}to{transform:rotate(1turn)}} .toast-message-notice{transition: height .3s ease-in-out,padding .3s ease-in-out;}</style>';
            $('body').append(html);
        }
    },

    _end: function (message, duration) {
        var me = this;
        $('.toast-message').append(message['html']);
        $('.toast-message').find(message['obj']).animate({marginTop: '8px', opacity: 1}, 100, function () {
            if (duration > 0) {
                setTimeout(function () {
                    me._remove(message['obj']);
                }, duration);
            }
        });
        return message;
    }

};