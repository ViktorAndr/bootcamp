(function() {
    tinymce.create('tinymce.plugins.plazartquote', {
        init : function(ed, url) {
            ed.addButton('plazartquote', {
                title : 'Add Quote',
                image : url+'/quote.png',
                onclick : function() {
                    create_quote();
                    jQuery.fancybox({
                        'type' : 'inline',
                        'title' : 'Add Quote',
                        'href' : '#create_quote',
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
    tinymce.PluginManager.add('plazartquote', tinymce.plugins.plazartquote);
})();


function create_quote() {
    if ( jQuery('#create_quote').length ) {
        jQuery('#create_quote').remove();
    }
    var $html_quote = jQuery('<div id="create_quote" class="oscitas-container">\
                                    <div class="create_content">\
                                     <h6 class="tzheadding">Content</h6>\
                                    <textarea rows="5" class="tzContent tztextarea tzvalue"></textarea>\
                                    <div>\
                                    <button id="tz-insert-quote" class="button button-primary button-large" >Add shortcode</button>\
                                </div>');
    $html_quote.appendTo('body');

    jQuery('#tz-insert-quote').on('click',function () {
        var shortcode ='';
        var $content    = jQuery('.tzContent').val();

        var shortcode = '[quote]' +$content+ '[/quote]';
        tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);
        jQuery.fancybox.close();
        jQuery('#create_quote').remove();
        return false;

    });
}

