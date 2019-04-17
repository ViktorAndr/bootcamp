(function() {
    tinymce.create('tinymce.plugins.plazartdropcap', {
        init : function(ed, url) {
            ed.addButton('plazartdropcap', {
                title : 'Add Dropcap',
                image : url+'/dropcap.png',
                onclick : function() {
                    tztitania_create_dropcap();
                    jQuery.fancybox({
                        'type' : 'inline',
                        'title' : 'Add dropcap',
                        'href' : '#create_dropcap',
                        helpers:  {
                            title : {
                                type : 'over',
                                position:'top'
                            }
                        }
                    });
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
        getInfo : function() {
            return {
                longname:'Plazart TinyMCE Shortcode',
                author:'Plazart',
                authorurl:'http://templaza.com',
                infourl:'http://templaza.com',
                version:tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }
    });
    tinymce.PluginManager.add('plazartdropcap', tinymce.plugins.plazartdropcap);
})();


function tztitania_create_dropcap() {
    if ( jQuery('#create_dropcap').length ) {
        jQuery('#create_dropcap').remove();
    }
    var $html_image = jQuery('<div id="create_dropcap">\
                                    <div class="create_content">\
                                        <div class="TzDropcapContainer">\
                                            <label class="tzshortcodetitle">Type Dropcap</label>\
                                            <select id="type_dropcap">\
                                                    <option value="type1">Type1</option>\
                                                    <option value="type2">Type2</option>\
                                                    <option value="type3">Type3</option>\
                                            </select>\
                                        </div>\
                                        <div class="TzDropcapContainer">\
                                            <label class="tzshortcodetitle">Letter</label>\
                                            <input type="text" class="form-control tzdropcap-letter" placeholder=""> Example: S\
                                        </div></br>\
                                    </div>\
                                    <button class="button button-primary button-large" id="tz-insert-dropcap">Add shortcode</button>\
                                    </div>\
                                </div>');
    $html_image.appendTo('body');

    // insert image
    jQuery('#tz-insert-dropcap').on('click', function(){
        var $type          = jQuery('#type_dropcap').val();
        var $letter       = jQuery('.tzdropcap-letter').val();

        var $view_dropcap = '[dropcap type="'+$type+'" letter="'+$letter+'"]';
        tinyMCE.activeEditor.execCommand('mceInsertContent',0,$view_dropcap);
        jQuery.fancybox.close();
        jQuery('#create_dropcap').remove();
    });
}