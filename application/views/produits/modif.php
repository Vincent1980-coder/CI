<!-- application/views//produits/modifs.php -->

<body>
<?php echo form_open(); ?>
	<label>Libellé</label><br>
    <input type="text" name="pro_libelle" value="<?= $produits->pro_libelle; ?>"><br>
    <label>Référence</label><br>
    <input type="text" name="pro_ref" value="<?= $produits->pro_ref; ?>"><br>
	<label>Prix</label><br>
	<input type="text" name="pro_prix" value="<?= $produits->pro_prix; ?>"><br><br>
	<label>Stocks</label><br>
	<input type="text" name="pro_stock" value="<?= $produits->pro_stock; ?>"><br><br>
	<label>Couleur</label><br>
	<input type="text" name="pro_couleur" value="<?= $produits->pro_couleur; ?>"><br><br>
	<label>Photo</label><br>
    <input type="file" name="photo" value="<?= $produits->pro_photo; ?>">><br><br>
    
    <input type="hidden" name="pro_id" value="<?= $produits->pro_id; ?>"><br><br>
    
    <input type="submit" value="Modifier"><br><br>
</form>
<br>