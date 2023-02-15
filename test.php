<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WYSIWYG Editor with Preview and Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>WYSIWYG Editor</h2>
                <?php
                    $file = "content.txt";
                    $content = file_get_contents($file);
                    echo "<form method='post'>
                            <div class='form-group'>
                                <label for='editor'>Enter text:</label>
                                <textarea name='editor' id='editor'>$content</textarea>
                            </div>
                            <div class='form-group'>
                                <input type='submit' name='save' value='Save' class='btn btn-primary'>
                            </div>
                          </form>";
                ?>
            </div>
            <div class="col-md-6">
                <h2>Preview</h2>
                <?php
                    if (isset($_POST["save"])) {
                        $content = $_POST["editor"];
                        file_put_contents($file, $content);
                    }
                    $preview = file_get_contents($file);
                    echo "<div class='card p-3'>$preview</div>";
                ?>
            </div>
        </div>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                toolbar: {
                    items: [
                        'heading',
                        '|',
                        'bold',
                        'italic',
                        'underline',
                        'strikethrough',
                        '|',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'fontColor',
                        'fontSize',
                        '|',
                        'outdent',
                        'indent',
                        '|',
                        'alignment',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        'undo',
                        'redo'
                    ]
                },
                language: 'en',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:inline',
                        'imageStyle:block',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                licenseKey: '',
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

</body>
</html>
