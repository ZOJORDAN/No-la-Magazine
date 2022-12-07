<?php //$title = "";
    $href_ = "../assets/toggle.css";
    include 'head.php';?>

<script type="text/javascript" src="../script/toggle.js"></script>

<div class="toggles">
    <span class="material-symbols-outlined">
    light_mode</span>
    <button type="button" id="styled" aria-pressed="false" 
    onclick="toggle(this.id);"></button>
    <span class="material-symbols-outlined">
    dark_mode</span>
</div>