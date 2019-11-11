<?php
/**
 * The template for displaying search forms in uoft_bootstrap3
 *
 * @package uoft_bootstrap3
 */
?>
<form class="" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
   	<label for="searchThisSite" class="sr-only">Search</label>
    <div class="input-group merged" >
        <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
        <input type="text" name="s" id="searchThisSite" class="form-control search-field"
               placeholder="Search this website" />
    </div>
</form>