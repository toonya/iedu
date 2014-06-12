/*
" --------------------------------------------------
"   FileName: ndoo_prep.coffee
"       Desc: ndoo.js前置文件
"     Author: chenglf
"    Version: ndoo.js(v0.1b2)
" LastChange: 07/04/2013 15:09
" --------------------------------------------------
*/
(function(_n) {
  _n._isDebug = 0;
  _n.event = {
    inited: false,
    TEMP_ON: 1,
    TEMP_TRIGGER: 2,
    _temp: [],
    on: function(eventName, callback) {
      this._temp.push({
        type: this.TEMP_ON,
        eventName: eventName,
        callback: callback
      });
    },
    trigger: function(eventName, eventType, data) {
      this._temp.push({
        type: this.TEMP_TRIGGER,
        eventName: eventName,
        eventType: eventType,
        data: data
      });
    }
  };
  _n.on = function(eventName, callback) {
    return this.event.on(eventName, callback);
  };
  _n.trigger = function(eventName, eventType, data) {
    if (data == null) {
      data = void 0;
    }
    if (typeof eventType !== 'string') {
      data = eventType;
      eventType = 'default';
    }
    return this.event.trigger(eventName, eventType, data);
  };
  return _n;
})(this.M = this.mclub = this.mclub || {});

this.M.vars = this.phpvars = {};
