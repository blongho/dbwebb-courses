<?php
/**
 * Created by PhpStorm.
 * User: longb
 * Date: 9/8/2018
 * Time: 11:17 PM
 */
include("incl/header.php");
?>
<main id="wrapper">
    <article id="content">
        <header>
            <h3>Fill the form below to get to me</h3>
        </header>
        <form>
            <fieldset>
                <legend>Contact me!</legend>
                <label for="name">Your name: </label>
                <input type="text" id="name">
                <label for="email">Your email: </label>
                <input type="email" id="email">
                <label for="select">Your purpose: </label>
                <select id="select">
                    <option>Friendly message</option>
                    <option>News about the empire</option>
                    <option>Looking for employees</option>
                </select>
                <label for="message">Your message: </label>
                <textarea id="message"></textarea>
            </fieldset>
        </form>
        <footer>
            <?php include("incl/byline.php"); ?>
        </footer>
    </article>
</main>
<?php include("incl/footer.php"); ?>

