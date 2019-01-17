<style>.card {
        width: 400px; /*1*/
        margin: 0px auto; /*2*/
        background-color: white; /*3*/
        box-shadow: 0px 5px 20px #999; /*4*/
    }
    .card a { /*5*/
        color: #333; 
        text-decoration: none;
    }
    .card:hover .card-image img { /*6*/
        width: 160%;
        filter: grayscale(0);
    }
    .card-image {
        height: 250px;/*1*/
        position: relative;/*2*/
        overflow: hidden;/*3*/
    }
    .card-image img {
        width: 150%;/*4*/
        /*5 - Méthode de centrage en fonction de la taille de l'image */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        filter: grayscale(1);/*6*/
        /*7 - Transition */
        transition-property: filter width; 
        transition-duration: .3s;
        transition-timing-function: ease;
    }
    .card-body {
        text-align:center;  /*1*/
        padding: 15px 20px; /*2*/
        box-sizing: border-box; /*3*/
    }
    .card-date {
        font-family: 'Source Sans Pro', sans-serif;
    }

    .card-title, .card-excerpt {
        font-family: 'Playfair Display', serif;
    }

    .card-date, .card-title {
        text-align:center;
        text-transform:uppercase;
        font-weight: bold;
    }

    .card-date, .card-excerpt {
        color: #777;
    }</style>
<div class="card">
    <a href="#">
        <!-- Image à la une -->
        <div class="card-image"><img src="../photo martinique/fort-de-france.png" alt="Orange" /></div>

        <!-- Fin de l'image à la une -->

        <!-- Corp de notre carte -->
        <div class="card-body">


            <!-- Titre de l'article -->
            <div class="card-title">
                <h3>FORT DE FRANCE</h3>
            </div>
            <!-- Extrait de l'article -->
            <div class="card-excerpt">
                <p> Sur la côte ouest de la Martinique se trouve Fort-de-France, la seule grande ville de l’île. Sa capitale, aussi. La baie qui l’abrite frappe par sa splendeur. On y vient volontiers à Fort-de-France pour une demi-journée ou une journée pour faire le marché, courir les boutiques ou se balader dans le centre ancien, mais si vous ne faites que passer en vitesse, sans lever le nez ou en visite organisée, n’espérez pas trop trouver une architecture typique ni un art de vivre préservé. .</p>
            </div>

        </div>
        <!-- Fin du corp de notre carte -->
    </a>
</div>