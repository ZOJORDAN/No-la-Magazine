<?php include '../templates/head-elements/main-head.php'; ?>
<?php include '../templates/head-elements/head-toggle.php'; ?>

<script type="text/javascript" src="../script/toggle.js"></script>

<div class="toggles">
    <span class="material-symbols-outlined">
    light_mode</span>
    <button type="button" id="styled" aria-pressed="false" 
    onclick="toggle(this.id);"></button>
    <span class="material-symbols-outlined">
    dark_mode</span>
</div>