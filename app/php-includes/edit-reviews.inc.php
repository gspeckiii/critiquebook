<div class="form">
<fieldset>
    
    <legend><h1>Reviews</h1></legend>
    <label class="label" for="revWork"><strong>  Whats Working  </strong></label><textarea class="form__long" type="text" id="rev" name="revWork" /></textarea>
    <label class="label" for="revNot"><strong>  Whats not  </strong></label><textarea class="form__long" type="text" id="rev" name="revNot" /></textarea>
    <label class="label" for="revMoral"><strong>  Moral of the story  </strong></label><textarea class="form__long" type="text" id="rev" name="revMoral" /></textarea><br>
    <label class="label" for="stars"><strong>  Stars  </strong></label><input class="form__tiny" type="text" id="stars" name="stars" />  
    <form action="php-includes/editBook.inc.php" method="POST" >
     	<button type="submit" name="submit">Save</button>
	</form>
</fieldset>
</div>