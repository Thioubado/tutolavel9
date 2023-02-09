<footer>
    <div class="ui grid">
        <div class="three column row">
            <div class="left floated column">Footer Semantic</div>
            <div class="right floated column" style = 'text-align:right;'>
                URI: <strong><?= substr($_SERVER['REQUEST_URI'] ?? '/', 1) ?>&nbsp;</strong>
            </div>
        </div>
    </div>
</footer>
