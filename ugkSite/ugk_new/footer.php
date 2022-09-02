<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ugk_new
 */

?>

    <script>
    
     let buttonTypes = document.querySelector('.buttons_types').children
console.log(buttonTypes)


function types_open(num, elem) {
    for (let index = 0; index < document.querySelectorAll('.type-slider').length; index++) {
        document.querySelectorAll('.buttons_types button')[index].className = ''
        document.querySelectorAll('.type-slider')[index].style.display = 'none'
    }

    elem.className = 'active'
    document.querySelector('div[data-counter="'+num+'"]').style.display = 'flex';

    console.log(num)
}

function question_show(num, elem) {
    if (document.querySelectorAll('.question_item_a')[num].style.display == 'none') {
        document.querySelectorAll('.question_item_a')[num].style.display = 'block'
    } else {
        document.querySelectorAll('.question_item_a')[num].style.display = 'none'
    }
}
    
    </script>





	<footer id="colophon" class="site-footer">

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>