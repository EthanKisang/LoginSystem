<?php
include_once("header.php");
?>

<section class="homepage">
    <?php
    if (isset($_SESSION["usersuid"])) {
        echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
    }
    ?>
    <marquee behavior="alternately" direction="right">
        <h1>Easy Vanilla Cake Recipe</h1>
    </marquee>
    <div class="PageContents">
        <nav>
            <h1>Contents</h1>
            <ul>
                <li><a href="#ingredients">Ingredients</a></li>
                <li><a href="#method">Method</a></li>
                <li><a href="#ending">Ending</a></li>
            </ul>
        </nav>
    </div>
    <div class="gallery">
        <div class="image">
            <img src="imgs/VanillaCake.jpg" alt="Vanilla Cake 1">
        </div>
        <div class="image">
            <img src="imgs/VanillaCake2.jpg" alt="Vanilla Cake 2">
        </div>
    </div>
    <div class="image_links">
        <a target="_blank" href="imgs/VanillaCake.jpg">Click to see the picture on a new page.</a></br>
        <a target="_blank" href="imgs/VanillaCake2.jpg">Click to see an alternative picture on a new page.</a>
    </div>
    <div class="ingredients">
        <h1 id="ingredients">Ingredients</h1>
        <ul>
            <li>200g caster sugar</li>
            <li>200g softened butter</li>
            <li>4 eggs</li>
            <li>200g self-raising flour</li>
            <li>1 tsp baking powder</li>
            <li>2 tbsp milk</li>
            <li>1 tsp vanilla extract</li>
        </ul>
    </div>
    <div class="method">
        <h1 id="method">Method</h1>
        <h2>Step 1</h2>
        <p>Pre-heat the oven to 175C(350F). Butter the non-stick backing tray and sprinkle flour on top. All this will
            help the cake not to stick on the baking tray</p>
        <h2>Step 2</h2>
        <p>In a large bowl,combine the flour and baking powder, mix them together and set them aside.</p>
        <h2>Step 3</h2>
        <p>In a separate bowl, cream together the softened butter and sugar until light and fluffy.</p>
        <h2>Step 4</h2>
        <p>Beat the eggs, one at a time, then stir in the vanilla extract.</p>
        <h2>Step 5</h2>
        <p>Add the flour mixture alternately with the milk, beginning and ending with the dry ingredients. Mix until
            just
            incorporated</p>
        <h2>Step 6</h2>
        <p>Pour in the batter into the prepared pans and smoothen the tops.</p>
        <h2>Step 7</h2>
        <p>Bake at 190 degrees Celcius for 25-30 minutes or until a toothpick inserted into the center comes out clean.
        </p>
    </div>
    <div id="ending">
        <h1 id="ending">Ending</h1>
        <p>Once the cake cools, you can frost the cake to your liking. <br>
            Enjoy your homemade cake!</p>
    </div>
</section>
<?php
include_once("footer.php")
?>