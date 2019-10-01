<!-- application/views//produits/ajout.php -->

 <?php echo form_open(); ?>
	
	<label>Référence</label><br>
    <input type="text" name="pro_ref"><br><br>
	<label>Libellé</label><br>
	<input type="text" name="pro_libelle"><br><br>
	<label>Prix</label><br>
	<input type="text" name="pro_prix"><br><br>
	<label>Stocks</label><br>
	<input type="text" name="pro_stock"><br><br>
	<label>Couleur</label><br>
	<input type="text" name="pro_couleur"><br><br>
	<label>Photo</label><br>
	<input type="file" name="photo"><br><br><br>
	<input type="submit" value="Ajouter"><br><br>
</form>
