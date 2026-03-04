<?php
/*
Plugin Name: Mon Footer Professionnel
Plugin URI: http://tonsite.com
Description: Footer personnalisé avec infos, liens, réseaux sociaux
Version: 1.1
Author: Ton Nom
Author URI: http://tonsite.com
*/

if (!defined('ABSPATH')) exit;

// Ajouter le footer
add_action('wp_footer', 'mon_footer_professionnel');

function mon_footer_professionnel() {
    ?>
    <style>
        /* Footer général */
        #mon-footer {
            background: #111; /* Fond sombre */
            color: #e0e0e0; /* Texte gris clair */
            padding: 50px 20px;
            font-family: "Helvetica Neue", Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6;
        }
        #mon-footer a {
            color: #C23535; /* Bleu professionnel pour liens */
            text-decoration: none;
            margin: 0 5px;
        }
        #mon-footer a:hover {
            text-decoration: underline;
        }

        /* Structure en colonnes */
        #mon-footer .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1100px; /* un peu plus étroit */
            margin: auto;
        }
        #mon-footer .footer-column {
            flex: 1;
            min-width: 220px;
            margin: 15px;
        }

        /* Limiter la largeur du texte "À propos" */
        #mon-footer .footer-column.about p {
            max-width: 280px;
        }

        /* Titres colonnes */
        #mon-footer h4 {
            color: #fff; /* Blanc neutre */
            margin-bottom: 12px;
            font-weight: 600;
        }

        /* Réseaux sociaux */
        #mon-footer .social-icons a {
            font-size: 18px;
            margin-right: 10px;
        }

        /* Responsive */
        @media(max-width:768px){
            #mon-footer .footer-container {
                flex-direction: column;
                text-align: center;
            }
            #mon-footer .footer-column { 
                margin: 20px 0; 
            }
            #mon-footer .footer-column.about p {
                max-width: 100%;
            }
        }
    </style>

    <div id="mon-footer">
        <div class="footer-container">

            <!-- Colonne À propos -->
            <div class="footer-column about">
                <h4>À propos</h4>
                <p>BookLoop vous accompagne pour découvrir et acheter vos livres préférés facilement et rapidement.</p>
            </div>

            <!-- Colonne Infos -->
            <div class="footer-column">
                <h4>Infos</h4>
                <p>Add : ISPM Antsobolo</p>
                <p>Call : +261 34 12 134 12</p>
                <p>Email : <a href="mailto:BookLoop261@gmail.com">BookLoop261@gmail.com</a></p>
            </div>

            <!-- Colonne Liens & Réseaux -->
            <div class="footer-column">
                <h4>Liens utiles</h4>
                <p>
                    <a href="#">Accueil</a><br>
                    <a href="#">Boutique</a><br>
                    <a href="#">Contact</a><br>
                    <a href="#">FAQ</a>
                </p>
                <div class="social-icons">
                    <a href="#" title="">Facebook</a>
                    <a href="#" title="">Twitter</a>
                    <a href="#" title="">Instagram</a>
                    <a href="#" title="">LinkedIn</a>
                </div>
            </div>

        </div>

        <p style="text-align:center;margin-top:25px;color:#b0b0b0;">&copy; <?php echo date('Y'); ?> BookLoop - Tous droits réservés</p>
    </div>
    <?php
}
?>