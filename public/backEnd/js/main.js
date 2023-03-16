// For Editor
    tinymce.init({
        selector: '#message, #singleCompanyDescription, #artVentureAbout, #project_description, #text',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        fontsize_formats:
        "8pt 9pt 10pt 11pt 12pt 14pt 18pt 24pt 30pt 36pt 48pt 60pt 72pt 96pt",

        font_formats: "Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Poppins=poppins; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",

        content_style: "@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap'); body { font-family: Poppins; font-size: 14pt; }"
    });
