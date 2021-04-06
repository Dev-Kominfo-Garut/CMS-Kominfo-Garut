tinymce.init(
    window.voyagerTinyMCE.getConfig({
        menubar: "edit view insert format tools table tc help",
        selector: "textarea.richTextBox",
        themes: "modern",
        skin_url:
            $('meta[name="assets-path"]').attr("content") +
            "?path=js/skins/voyager",
        min_height: 600,
        resize: "vertical",
        plugins: "link image code table textcolor lists media",
        media_alt_source: false,
        media_live_embeds: true,
        extended_valid_elements:
            "input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]",
        file_browser_callback: function (field_name, url, type, win) {
            if (type == "image") {
                $("#upload_file").trigger("click");
            }
        },
        video_template_callback: function (data) {
            return (
                '<video width="' +
                data.width +
                '" height="' +
                data.height +
                '"' +
                (data.poster ? ' poster="' + data.poster + '"' : "") +
                ' controls="controls">\n' +
                '<source src="' +
                data.source +
                '"' +
                (data.sourcemime ? ' type="' + data.sourcemime + '"' : "") +
                " />\n" +
                (data.altsource
                    ? '<source src="' +
                      data.altsource +
                      '"' +
                      (data.altsourcemime
                          ? ' type="' + data.altsourcemime + '"'
                          : "") +
                      " />\n"
                    : "") +
                "</video>"
            );
        },
        toolbar:
            "undo redo | styleselect bold italic underline strikethrough | fontsizeselect formatselect | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | link image media table | code fullscreen",
        convert_urls: false,
        image_caption: true,
        image_title: true,
        init_instance_callback: function (editor) {
            if (typeof tinymce_init_callback !== "undefined") {
                tinymce_init_callback(editor);
            }
        },
        setup: function (editor) {
            if (typeof tinymce_setup_callback !== "undefined") {
                tinymce_setup_callback(editor);
            }
        },
    })
);
