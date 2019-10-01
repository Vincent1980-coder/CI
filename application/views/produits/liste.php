<!-- application/views//produits/liste.php -->
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th class="titre">Photos</th>
                <th class="titre">ID</th>
                <th class="titre">Référence</th>
                <th class="titre">Libellé</th>
                <th class="titre">Prix</th>
                <th class="titre">Stocks</th>
                <th class="titre">Couleur</th>
                <th class="titre">Ajout</th>
                <th class="titre">Modif</th>
                <th class="titre">Bloqué</th>
                <th><button class="come"><a class="ajout" href="<?= site_url("produits/ajout")?>">Ajouter un produit</a></button></th>
            </tr>
                <?php 
                foreach ($liste_produits as $produit) 
                {
                ?>
            <tr>
                <td class="photo"><img class="produit img-fluid" alt="Responsive image" src="<?= base_url("assets/img/jarditou_photos/".$produit->pro_id.".".$produit->pro_photo); ?>"> </td>
                <td> <?php echo $produit->pro_id; ?> </td>
                <td> <?php echo $produit->pro_ref; ?> </td>
                <td> <?php echo $produit->pro_libelle; ?> </td>
                <td> <?php echo $produit->pro_prix; ?> </td>
                <td> <?php echo $produit->pro_stock; ?> </td>
                <td> <?php echo $produit->pro_couleur; ?> </td>
                <td> <?php echo $produit->pro_d_ajout; ?> </td>
                <td> <?php echo $produit->pro_d_modif; ?> </td>
                <td> <?php echo $produit->pro_bloque; ?> </td>
                <td> <button class="up"> <a class="up" href="<?= site_url("produits/modif/".$produit->pro_id)?>">Modifier le produit</a>
                </button>
                <br>
                <button class="del"><a  class="del" href="<?= site_url("produits/suppr/".$produit->pro_id)?>">Supprimer le produit</a></button>                </td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
</div>
<br><br>