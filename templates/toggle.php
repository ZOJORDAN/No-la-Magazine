<?php $title = "toggle";
    $filePath = "../assets/toggle.css";
    include 'head.php'; ?>

<script type="text/javascript" src="../script/toggle.js"></script>

<fieldset class="radio-switch">
    <legend>Settings</legend>

    <input type="radio" name="lol" id="public">
    <label for="public">On</label>

    <input type="radio" name="lol" id="private">
    <label for="private">Off</label>
</fieldset>