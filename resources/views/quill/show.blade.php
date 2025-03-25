<style>
    .quill-content {
        white-space: normal;
        /* Ensures text wraps properly */
        word-wrap: break-word;
        /* Breaks long words if needed */
        overflow-wrap: break-word;
        /* Alternative for older browsers */
        max-width: 100%;
        /* Ensures content doesn’t overflow */
        color: #016262;
    }
</style>

<h2>Quill Content</h2>
<div class="quill-content">
    {!! $content->content !!}
</div>
