var BDBridge = window.BDBridge || (function(){

    var self;
    var CONFIG = {
        BD_BRIDGE_OPEN : 1,
        BD_BRIDGE_ROOT : "http://qiao.baidu.com/"
    };

    document.cookie = 'VERSION=2,0,0,0';
    
    if ((CONFIG.BD_BRIDGE_OPEN == 1) && (typeof window["BD_BRIDGE_LOADED"] == "undefined")) {
        window["BD_BRIDGE_LOADED"] = 1;
        var script = document.createElement("script");
        script.type="text/javascript";
        script.charset = "UTF-8";
        script.src = CONFIG.BD_BRIDGE_ROOT + "asset/js/bw.js?v=20140116";
        document.getElementsByTagName("head")[0].appendChild(script);
    }
    
    
    return self = {
    
        BD_BRIDGE_OPEN : CONFIG.BD_BRIDGE_OPEN,
        BD_BRIDGE_ROOT : CONFIG.BD_BRIDGE_ROOT,
        BD_BRIDGE_RCV_ROOT : "http://rqiao.baidu.com/",
        BD_BRIDGE_DATA : {mainid : "120477479", SITE_ID : "ef4e01798512f295efece8dacf213681", siteid : "4757705", userName: 'sh第六感'},
        OPEN_MODULAR : 11111,
                BD_BRIDGE_SPECIAL :  [] ,
        
                BD_BRIDGE_STYLE_ITEM : 
        [        {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [ '' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [ { key : "", necessity : } ] 
            }
        },                {
            pageid : "h",
            
           
                        BD_BRIDGE_GROUP:  [ 'h' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "h" - 0,
                background : {
                    color : "h",
                    url   : "h",
                    bgcolor : "h"
                },
                head : {
                    url    : "h",
                    width  : "h" - 0,
                    height : "h" - 0
                },
                button : {
                    color : "h",
                    url   : "h",
                    text  : "h"
                },
                flow     : "h" - 0,
                position : "h" - 0,
                special : "h"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "h" - 0,
                show : {
                    pos : "h" - 0,
                    width : "h" - 0,
                    height : "h" - 0,
                    font : "h",
                    fontsize : "h",
                    fontcolor : "h",
                    type : "h" - 0
                },
                background : {
                    color : "h",
                    url   : "h"
                },
                head : {
                    show : "h" - 0,
                    size : "h" - 0,
                    url  : "h"
                },
                text   : "h",
                button : "h",
                mode   : "h" - 0,
                special : "h" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "h" - 0,
                invitemanual : "h" - 0,
                invitetype   : "h" - 0,
                inviterepeat : "h" - 0,
                invitetime   : "h" - 0,
                invitedisaptype : "h" - 0,
                invitedisaptime : "h" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "h" - 0,
                webimbgcolor  : "h",
                floatposition : "h" - 0,
                floatChatName : "h" - 0,
                floatCustomname : "h"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "h" - 0,
                messType        : 1,
                messFloatType   : "h" - 0,
                language        : "h" - 0,
                position        : "h" - 0,
                backgroundColor : "h",
                backgroundUrl       : "h", 
                messItemName    : "h",
                messItemPhone   : "h",
                messItemAddress : "h",
                messItemEmail   : "h",
                extraMessItems  :  [ { key : "h", subItems : [ "h" ], necessity : h } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [ '' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [ { key : "", necessity : } ] 
            }
        },                {
            pageid : "h",
            
           
                        BD_BRIDGE_GROUP:  [ 'h' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "h" - 0,
                background : {
                    color : "h",
                    url   : "h",
                    bgcolor : "h"
                },
                head : {
                    url    : "h",
                    width  : "h" - 0,
                    height : "h" - 0
                },
                button : {
                    color : "h",
                    url   : "h",
                    text  : "h"
                },
                flow     : "h" - 0,
                position : "h" - 0,
                special : "h"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "h" - 0,
                show : {
                    pos : "h" - 0,
                    width : "h" - 0,
                    height : "h" - 0,
                    font : "h",
                    fontsize : "h",
                    fontcolor : "h",
                    type : "h" - 0
                },
                background : {
                    color : "h",
                    url   : "h"
                },
                head : {
                    show : "h" - 0,
                    size : "h" - 0,
                    url  : "h"
                },
                text   : "h",
                button : "h",
                mode   : "h" - 0,
                special : "h" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "h" - 0,
                invitemanual : "h" - 0,
                invitetype   : "h" - 0,
                inviterepeat : "h" - 0,
                invitetime   : "h" - 0,
                invitedisaptype : "h" - 0,
                invitedisaptime : "h" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "h" - 0,
                webimbgcolor  : "h",
                floatposition : "h" - 0,
                floatChatName : "h" - 0,
                floatCustomname : "h"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "h" - 0,
                messType        : 1,
                messFloatType   : "h" - 0,
                language        : "h" - 0,
                position        : "h" - 0,
                backgroundColor : "h",
                backgroundUrl       : "h", 
                messItemName    : "h",
                messItemPhone   : "h",
                messItemAddress : "h",
                messItemEmail   : "h",
                extraMessItems  :  [ { key : "h", subItems : [ "h" ], necessity : h } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [ '' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [ { key : "", necessity : } ] 
            }
        },                {
            pageid : "#",
            
           
                        BD_BRIDGE_GROUP:  [ '#' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "#" - 0,
                background : {
                    color : "#",
                    url   : "#",
                    bgcolor : "#"
                },
                head : {
                    url    : "#",
                    width  : "#" - 0,
                    height : "#" - 0
                },
                button : {
                    color : "#",
                    url   : "#",
                    text  : "#"
                },
                flow     : "#" - 0,
                position : "#" - 0,
                special : "#"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "#" - 0,
                show : {
                    pos : "#" - 0,
                    width : "#" - 0,
                    height : "#" - 0,
                    font : "#",
                    fontsize : "#",
                    fontcolor : "#",
                    type : "#" - 0
                },
                background : {
                    color : "#",
                    url   : "#"
                },
                head : {
                    show : "#" - 0,
                    size : "#" - 0,
                    url  : "#"
                },
                text   : "#",
                button : "#",
                mode   : "#" - 0,
                special : "#" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "#" - 0,
                invitemanual : "#" - 0,
                invitetype   : "#" - 0,
                inviterepeat : "#" - 0,
                invitetime   : "#" - 0,
                invitedisaptype : "#" - 0,
                invitedisaptime : "#" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "#" - 0,
                webimbgcolor  : "#",
                floatposition : "#" - 0,
                floatChatName : "#" - 0,
                floatCustomname : "#"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "#" - 0,
                messType        : 1,
                messFloatType   : "#" - 0,
                language        : "#" - 0,
                position        : "#" - 0,
                backgroundColor : "#",
                backgroundUrl       : "#", 
                messItemName    : "#",
                messItemPhone   : "#",
                messItemAddress : "#",
                messItemEmail   : "#",
                extraMessItems  :  [ { key : "#", subItems : [ "#" ], necessity : # } ] 
            }
        },                {
            pageid : "#",
            
           
                        BD_BRIDGE_GROUP:  [ '#' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "#" - 0,
                background : {
                    color : "#",
                    url   : "#",
                    bgcolor : "#"
                },
                head : {
                    url    : "#",
                    width  : "#" - 0,
                    height : "#" - 0
                },
                button : {
                    color : "#",
                    url   : "#",
                    text  : "#"
                },
                flow     : "#" - 0,
                position : "#" - 0,
                special : "#"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "#" - 0,
                show : {
                    pos : "#" - 0,
                    width : "#" - 0,
                    height : "#" - 0,
                    font : "#",
                    fontsize : "#",
                    fontcolor : "#",
                    type : "#" - 0
                },
                background : {
                    color : "#",
                    url   : "#"
                },
                head : {
                    show : "#" - 0,
                    size : "#" - 0,
                    url  : "#"
                },
                text   : "#",
                button : "#",
                mode   : "#" - 0,
                special : "#" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "#" - 0,
                invitemanual : "#" - 0,
                invitetype   : "#" - 0,
                inviterepeat : "#" - 0,
                invitetime   : "#" - 0,
                invitedisaptype : "#" - 0,
                invitedisaptime : "#" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "#" - 0,
                webimbgcolor  : "#",
                floatposition : "#" - 0,
                floatChatName : "#" - 0,
                floatCustomname : "#"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "#" - 0,
                messType        : 1,
                messFloatType   : "#" - 0,
                language        : "#" - 0,
                position        : "#" - 0,
                backgroundColor : "#",
                backgroundUrl       : "#", 
                messItemName    : "#",
                messItemPhone   : "#",
                messItemAddress : "#",
                messItemEmail   : "#",
                extraMessItems  :  [ { key : "#", subItems : [ "#" ], necessity : # } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "#",
            
           
                        BD_BRIDGE_GROUP:  [ '#' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "#" - 0,
                background : {
                    color : "#",
                    url   : "#",
                    bgcolor : "#"
                },
                head : {
                    url    : "#",
                    width  : "#" - 0,
                    height : "#" - 0
                },
                button : {
                    color : "#",
                    url   : "#",
                    text  : "#"
                },
                flow     : "#" - 0,
                position : "#" - 0,
                special : "#"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "#" - 0,
                show : {
                    pos : "#" - 0,
                    width : "#" - 0,
                    height : "#" - 0,
                    font : "#",
                    fontsize : "#",
                    fontcolor : "#",
                    type : "#" - 0
                },
                background : {
                    color : "#",
                    url   : "#"
                },
                head : {
                    show : "#" - 0,
                    size : "#" - 0,
                    url  : "#"
                },
                text   : "#",
                button : "#",
                mode   : "#" - 0,
                special : "#" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "#" - 0,
                invitemanual : "#" - 0,
                invitetype   : "#" - 0,
                inviterepeat : "#" - 0,
                invitetime   : "#" - 0,
                invitedisaptype : "#" - 0,
                invitedisaptime : "#" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "#" - 0,
                webimbgcolor  : "#",
                floatposition : "#" - 0,
                floatChatName : "#" - 0,
                floatCustomname : "#"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "#" - 0,
                messType        : 1,
                messFloatType   : "#" - 0,
                language        : "#" - 0,
                position        : "#" - 0,
                backgroundColor : "#",
                backgroundUrl       : "#", 
                messItemName    : "#",
                messItemPhone   : "#",
                messItemAddress : "#",
                messItemEmail   : "#",
                extraMessItems  :  [ { key : "#", subItems : [ "#" ], necessity : # } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "h",
            
           
                        BD_BRIDGE_GROUP:  [ 'h' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "h" - 0,
                background : {
                    color : "h",
                    url   : "h",
                    bgcolor : "h"
                },
                head : {
                    url    : "h",
                    width  : "h" - 0,
                    height : "h" - 0
                },
                button : {
                    color : "h",
                    url   : "h",
                    text  : "h"
                },
                flow     : "h" - 0,
                position : "h" - 0,
                special : "h"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "h" - 0,
                show : {
                    pos : "h" - 0,
                    width : "h" - 0,
                    height : "h" - 0,
                    font : "h",
                    fontsize : "h",
                    fontcolor : "h",
                    type : "h" - 0
                },
                background : {
                    color : "h",
                    url   : "h"
                },
                head : {
                    show : "h" - 0,
                    size : "h" - 0,
                    url  : "h"
                },
                text   : "h",
                button : "h",
                mode   : "h" - 0,
                special : "h" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "h" - 0,
                invitemanual : "h" - 0,
                invitetype   : "h" - 0,
                inviterepeat : "h" - 0,
                invitetime   : "h" - 0,
                invitedisaptype : "h" - 0,
                invitedisaptime : "h" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "h" - 0,
                webimbgcolor  : "h",
                floatposition : "h" - 0,
                floatChatName : "h" - 0,
                floatCustomname : "h"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "h" - 0,
                messType        : 1,
                messFloatType   : "h" - 0,
                language        : "h" - 0,
                position        : "h" - 0,
                backgroundColor : "h",
                backgroundUrl       : "h", 
                messItemName    : "h",
                messItemPhone   : "h",
                messItemAddress : "h",
                messItemEmail   : "h",
                extraMessItems  :  [ { key : "h", subItems : [ "h" ], necessity : h } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [ '' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [ { key : "", necessity : } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [ '' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [ { key : "", necessity : } ] 
            }
        },                {
            pageid : "h",
            
           
                        BD_BRIDGE_GROUP:  [ 'h' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "h" - 0,
                background : {
                    color : "h",
                    url   : "h",
                    bgcolor : "h"
                },
                head : {
                    url    : "h",
                    width  : "h" - 0,
                    height : "h" - 0
                },
                button : {
                    color : "h",
                    url   : "h",
                    text  : "h"
                },
                flow     : "h" - 0,
                position : "h" - 0,
                special : "h"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "h" - 0,
                show : {
                    pos : "h" - 0,
                    width : "h" - 0,
                    height : "h" - 0,
                    font : "h",
                    fontsize : "h",
                    fontcolor : "h",
                    type : "h" - 0
                },
                background : {
                    color : "h",
                    url   : "h"
                },
                head : {
                    show : "h" - 0,
                    size : "h" - 0,
                    url  : "h"
                },
                text   : "h",
                button : "h",
                mode   : "h" - 0,
                special : "h" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "h" - 0,
                invitemanual : "h" - 0,
                invitetype   : "h" - 0,
                inviterepeat : "h" - 0,
                invitetime   : "h" - 0,
                invitedisaptype : "h" - 0,
                invitedisaptime : "h" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "h" - 0,
                webimbgcolor  : "h",
                floatposition : "h" - 0,
                floatChatName : "h" - 0,
                floatCustomname : "h"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "h" - 0,
                messType        : 1,
                messFloatType   : "h" - 0,
                language        : "h" - 0,
                position        : "h" - 0,
                backgroundColor : "h",
                backgroundUrl       : "h", 
                messItemName    : "h",
                messItemPhone   : "h",
                messItemAddress : "h",
                messItemEmail   : "h",
                extraMessItems  :  [ { key : "h", subItems : [ "h" ], necessity : h } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [ '' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [ { key : "", necessity : } ] 
            }
        },                {
            pageid : "�",
            
           
                        BD_BRIDGE_GROUP:  [ '�' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "�" - 0,
                background : {
                    color : "�",
                    url   : "�",
                    bgcolor : "�"
                },
                head : {
                    url    : "�",
                    width  : "�" - 0,
                    height : "�" - 0
                },
                button : {
                    color : "�",
                    url   : "�",
                    text  : "�"
                },
                flow     : "�" - 0,
                position : "�" - 0,
                special : "�"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "�" - 0,
                show : {
                    pos : "�" - 0,
                    width : "�" - 0,
                    height : "�" - 0,
                    font : "�",
                    fontsize : "�",
                    fontcolor : "�",
                    type : "�" - 0
                },
                background : {
                    color : "�",
                    url   : "�"
                },
                head : {
                    show : "�" - 0,
                    size : "�" - 0,
                    url  : "�"
                },
                text   : "�",
                button : "�",
                mode   : "�" - 0,
                special : "�" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "�" - 0,
                invitemanual : "�" - 0,
                invitetype   : "�" - 0,
                inviterepeat : "�" - 0,
                invitetime   : "�" - 0,
                invitedisaptype : "�" - 0,
                invitedisaptime : "�" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "�" - 0,
                webimbgcolor  : "�",
                floatposition : "�" - 0,
                floatChatName : "�" - 0,
                floatCustomname : "�"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "�" - 0,
                messType        : 1,
                messFloatType   : "�" - 0,
                language        : "�" - 0,
                position        : "�" - 0,
                backgroundColor : "�",
                backgroundUrl       : "�", 
                messItemName    : "�",
                messItemPhone   : "�",
                messItemAddress : "�",
                messItemEmail   : "�",
                extraMessItems  :  [ { key : "�", subItems : [ "�" ], necessity : � } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "#",
            
           
                        BD_BRIDGE_GROUP:  [ '#' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "#" - 0,
                background : {
                    color : "#",
                    url   : "#",
                    bgcolor : "#"
                },
                head : {
                    url    : "#",
                    width  : "#" - 0,
                    height : "#" - 0
                },
                button : {
                    color : "#",
                    url   : "#",
                    text  : "#"
                },
                flow     : "#" - 0,
                position : "#" - 0,
                special : "#"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "#" - 0,
                show : {
                    pos : "#" - 0,
                    width : "#" - 0,
                    height : "#" - 0,
                    font : "#",
                    fontsize : "#",
                    fontcolor : "#",
                    type : "#" - 0
                },
                background : {
                    color : "#",
                    url   : "#"
                },
                head : {
                    show : "#" - 0,
                    size : "#" - 0,
                    url  : "#"
                },
                text   : "#",
                button : "#",
                mode   : "#" - 0,
                special : "#" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "#" - 0,
                invitemanual : "#" - 0,
                invitetype   : "#" - 0,
                inviterepeat : "#" - 0,
                invitetime   : "#" - 0,
                invitedisaptype : "#" - 0,
                invitedisaptime : "#" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "#" - 0,
                webimbgcolor  : "#",
                floatposition : "#" - 0,
                floatChatName : "#" - 0,
                floatCustomname : "#"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "#" - 0,
                messType        : 1,
                messFloatType   : "#" - 0,
                language        : "#" - 0,
                position        : "#" - 0,
                backgroundColor : "#",
                backgroundUrl       : "#", 
                messItemName    : "#",
                messItemPhone   : "#",
                messItemAddress : "#",
                messItemEmail   : "#",
                extraMessItems  :  [ { key : "#", subItems : [ "#" ], necessity : # } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "#",
            
           
                        BD_BRIDGE_GROUP:  [ '#' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "#" - 0,
                background : {
                    color : "#",
                    url   : "#",
                    bgcolor : "#"
                },
                head : {
                    url    : "#",
                    width  : "#" - 0,
                    height : "#" - 0
                },
                button : {
                    color : "#",
                    url   : "#",
                    text  : "#"
                },
                flow     : "#" - 0,
                position : "#" - 0,
                special : "#"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "#" - 0,
                show : {
                    pos : "#" - 0,
                    width : "#" - 0,
                    height : "#" - 0,
                    font : "#",
                    fontsize : "#",
                    fontcolor : "#",
                    type : "#" - 0
                },
                background : {
                    color : "#",
                    url   : "#"
                },
                head : {
                    show : "#" - 0,
                    size : "#" - 0,
                    url  : "#"
                },
                text   : "#",
                button : "#",
                mode   : "#" - 0,
                special : "#" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "#" - 0,
                invitemanual : "#" - 0,
                invitetype   : "#" - 0,
                inviterepeat : "#" - 0,
                invitetime   : "#" - 0,
                invitedisaptype : "#" - 0,
                invitedisaptime : "#" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "#" - 0,
                webimbgcolor  : "#",
                floatposition : "#" - 0,
                floatChatName : "#" - 0,
                floatCustomname : "#"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "#" - 0,
                messType        : 1,
                messFloatType   : "#" - 0,
                language        : "#" - 0,
                position        : "#" - 0,
                backgroundColor : "#",
                backgroundUrl       : "#", 
                messItemName    : "#",
                messItemPhone   : "#",
                messItemAddress : "#",
                messItemEmail   : "#",
                extraMessItems  :  [ { key : "#", subItems : [ "#" ], necessity : # } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "#",
            
           
                        BD_BRIDGE_GROUP:  [ '#' - 0 ] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "#" - 0,
                background : {
                    color : "#",
                    url   : "#",
                    bgcolor : "#"
                },
                head : {
                    url    : "#",
                    width  : "#" - 0,
                    height : "#" - 0
                },
                button : {
                    color : "#",
                    url   : "#",
                    text  : "#"
                },
                flow     : "#" - 0,
                position : "#" - 0,
                special : "#"
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "#" - 0,
                show : {
                    pos : "#" - 0,
                    width : "#" - 0,
                    height : "#" - 0,
                    font : "#",
                    fontsize : "#",
                    fontcolor : "#",
                    type : "#" - 0
                },
                background : {
                    color : "#",
                    url   : "#"
                },
                head : {
                    show : "#" - 0,
                    size : "#" - 0,
                    url  : "#"
                },
                text   : "#",
                button : "#",
                mode   : "#" - 0,
                special : "#" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "#" - 0,
                invitemanual : "#" - 0,
                invitetype   : "#" - 0,
                inviterepeat : "#" - 0,
                invitetime   : "#" - 0,
                invitedisaptype : "#" - 0,
                invitedisaptime : "#" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "#" - 0,
                webimbgcolor  : "#",
                floatposition : "#" - 0,
                floatChatName : "#" - 0,
                floatCustomname : "#"
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "#" - 0,
                messType        : 1,
                messFloatType   : "#" - 0,
                language        : "#" - 0,
                position        : "#" - 0,
                backgroundColor : "#",
                backgroundUrl       : "#", 
                messItemName    : "#",
                messItemPhone   : "#",
                messItemAddress : "#",
                messItemEmail   : "#",
                extraMessItems  :  [ { key : "#", subItems : [ "#" ], necessity : # } ] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        },                {
            pageid : "",
            
           
                        BD_BRIDGE_GROUP:  [] ,
            
            BD_BRIDGE_ICON_CONFIG : {
                iconlvtype : "" - 0,
                background : {
                    color : "",
                    url   : "",
                    bgcolor : ""
                },
                head : {
                    url    : "",
                    width  : "" - 0,
                    height : "" - 0
                },
                button : {
                    color : "",
                    url   : "",
                    text  : ""
                },
                flow     : "" - 0,
                position : "" - 0,
                special : ""
            },
            BD_BRIDGE_INVITE_CONFIG : {
                on : "" - 0,
                show : {
                    pos : "" - 0,
                    width : "" - 0,
                    height : "" - 0,
                    font : "",
                    fontsize : "",
                    fontcolor : "",
                    type : "" - 0
                },
                background : {
                    color : "",
                    url   : ""
                },
                head : {
                    show : "" - 0,
                    size : "" - 0,
                    url  : ""
                },
                text   : "",
                button : "",
                mode   : "" - 0,
                special : "" - 0
            },
            BD_BRIDGE_INVITE : {
                inviteauto : "" - 0,
                invitemanual : "" - 0,
                invitetype   : "" - 0,
                inviterepeat : "" - 0,
                invitetime   : "" - 0,
                invitedisaptype : "" - 0,
                invitedisaptime : "" - 0
            },
            BD_BRIDGE_WEBIM : {
                webimopentype : "" - 0,
                webimbgcolor  : "",
                floatposition : "" - 0,
                floatChatName : "" - 0,
                floatCustomname : ""
            },
                        BD_BRIDGE_PIGEON_SOUL : {
                disableMess     : "" - 0,
                messType        : 1,
                messFloatType   : "" - 0,
                language        : "" - 0,
                position        : "" - 0,
                backgroundColor : "",
                backgroundUrl       : "", 
                messItemName    : "",
                messItemPhone   : "",
                messItemAddress : "",
                messItemEmail   : "",
                extraMessItems  :  [] 
            }
        }        ]
        
    }
   


})();
