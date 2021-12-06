/*
 ***
 Author: Jaeeme
 Author URI: http://codersmag.com
 File Name : common.js
 *** 
 */

tinymce.init({
    selector: '#tiny-editor',
    width:'100%',
    height: 250,
    plugins: [
        "code ",
        "paste"
    ],
    browser_spellcheck : true,
    menu: {
        file: { 
            title: 'File', 
            items: 'newdocument restoredraft | preview | print' 
        },
        edit: { 
            title: 'Edit', 
            items: 'undo redo | cut copy paste | selectall | searchreplace' 
        },
        view: { 
            title: 'View', 
            items: 'code | visualaid visualchars visualblocks | preview fullscreen' 
        },
        format: { 
            title: 'Format', 
            items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align | forecolor backcolor | removeformat' 
        },
        tools: { 
            title: 'Tools', 
            items: 'code wordcount' 
        },
        table: { 
            title: 'Table', 
            items: 'inserttable | cell row column | tableprops deletetable' 
        },
        help: { 
            title: 'Help', items: 'help' 
        }
    },
    branding: false,
    mobile: {
        menubar: true
    },

});