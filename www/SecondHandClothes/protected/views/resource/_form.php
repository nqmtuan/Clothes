<?php 
	$baseUrl = Yii::app()->baseUrl;
	$baseUrlCss = $baseUrl. "/css";
	$baseUrlCssUploader = $baseUrlCss . "/JQueryFileUpload";
	$clientScript = Yii::app()->getClientScript();
	
	//Bootstrap CSS Toolkit styles
	$clientScript->registerCssFile ($baseUrlCssUploader . "/bootstrap.min.css");
	
	//Generic page styles
	$clientScript->registerCssFile ($baseUrlCssUploader . "/style.css");

	//Bootstrap styles for responsive website layout, supporting different screen sizes
	$clientScript->registerCssFile ($baseUrlCssUploader . "/bootstrap-responsive.min.css");

	//blueimp Gallery styles
	$clientScript->registerCssFile ($baseUrlCssUploader . "/blueimp-gallery.min.css");
	
	//CSS to style the file input field as button and adjust the Bootstrap progress bars
	$clientScript->registerCssFile ($baseUrlCssUploader . "/jquery.fileupload-ui.css");
?>

<div class="container">
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="icon-plus icon-white"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="icon-trash icon-white"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The loading indicator is shown during file processing -->
                <span class="fileupload-loading"></span>
            </div>
            <!-- The global progress information -->
            <div class="span5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="bar" style="width:0%;"></div>
                </div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
    <br>
</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            {% if (file.error) { %}
                <div><span class="label label-important">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <p class="size">{%=o.formatFileSize(file.size)%}</p>
            {% if (!o.files.error) { %}
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
            {% } %}
        </td>
        <td>
            {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnail_url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" class="gallery" download="{%=file.name%}"><img src="{%=file.thumbnail_url%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" class="{%=file.thumbnail_url?'gallery':''%}" download="{%=file.name%}">{%=file.name%}</a>
            </p>
            {% if (file.error) { %}
                <div><span class="label label-important">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            <button class="btn btn-danger delete" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}"{% if (file.delete_with_credentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="icon-trash icon-white"></i>
                <span>Delete</span>
            </button>
            <input type="checkbox" name="delete" value="1" class="toggle">
        </td>
    </tr>
{% } %}
</script>

<?php 
	//Register javascript file
	$baseUrl = Yii::app()->baseUrl;
	$baseUrlJs = $baseUrl. "/js";
	$baseUrlJsUploader = $baseUrlJs . "/JQueryFileUpload";
	$clientScript = Yii::app()->getClientScript();

	//JQuery JS
	$clientScript->registerScriptFile ($baseUrlJs . "/jquery.min.js");
	
	//The jQuery UI widget factory, can be omitted if jQuery UI is already included
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/vendor/jquery.ui.widget.js");
	
	//The Templates plugin is included to render the upload/download listings
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/tmpl.min.js");
	
	//The Load Image plugin is included for the preview images and image resizing functionality
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/load-image.min.js");

	// The Canvas to Blob plugin is included for image resizing functionality
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/canvas-to-blob.min.js");
	
	//Bootstrap JS is not required, but included for the responsive demo navigation
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/bootstrap.min.js");
	
	//blueimp Gallery script
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/blueimp-gallery.min.js");
	
	//The Iframe Transport is required for browsers without support for XHR file uploads
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/jquery.iframe-transport.js");

	//The basic File Upload plugin
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/jquery.fileupload.js");

	//The File Upload processing plugin
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/jquery.fileupload-process.js");
	
	//The File Upload image preview & resize plugin
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/jquery.fileupload-image.js");

	//The File Upload audio preview plugin
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/jquery.fileupload-audio.js");

	//The File Upload video preview plugin
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/jquery.fileupload-video.js");
	
	//The File Upload validation plugin
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/jquery.fileupload-validate.js");
	
	//The File Upload user interface plugin
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/jquery.fileupload-ui.js");	
	
	//Main Uploader application script
	$clientScript->registerScriptFile ($baseUrlJsUploader . "/main.js");
?>

