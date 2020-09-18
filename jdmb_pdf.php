<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   </head>
   <body>
      <link rel="stylesheet" type="text/css" href="https://www.jedeposemonbilan.com/wp-content/themes/jedeposemonbilan/pdf-style.css">
      <div class="dcp-pdf">
         <div class="container">
            <div class="fieldset_heading"><strong>Demande d'ouverture de redressement judiciaire</strong>(L>640-1 et s. R.640-1 & R.631-1 c.com.)</div>
            <div class="dcp-pdf-block">
               <div class="form-row">
                  <div class="form-link"> <a>Identification de la personne déposant la Demande</a></div>
               </div>
               <div class="form-row form-two-fields">
                  <div class="form-field"> <label>Nom de naissance : </label> <span><b><?php echo $_POST['nom_naissance']; ?></b></span></div>
                  <div class="form-field"> <label>Nom d’usage : </label> <span><b><?php echo $_POST['nom_usage']; ?></b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Prénoms : </label> <span><b><?php echo $_POST['prenom']; ?></b></span></div>
               </div>
               <div class="form-row form-three-fields">
                  <div class="form-field"> <label>Né(e) le </label> <span><b> <?php $_POST['date_ne_le']; ?> </b></span></div>
                  <div class="form-field"> <label>à </label> <span><b><?php echo $_POST['address_legal']; ?></b></span></div>
                  <div class="form-field"> <label>Nationalité : </label> <span><b> <?php $_POST['select_nationalite']; ?> </b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Situation matrimoniale <span class="notes">(en cas de mariage, préciser le régime)</span> : </label> <span><b> <?php if(isset($_POST['radio_matrimoniale'])){ echo $_POST['radio_matrimoniale']; } ?> </b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Domicile : </label> <span><b><?php echo $_POST['complete_address_legal']; ?></b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Nom de naissance et prénoms du père : </label> <span><b> <?php $_POST['nom_pere']; ?> </b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Nom de naissance et prénoms de la mère : </label> <span><b> <?php $_POST['nom_mere']; ?> </b></span></div>
               </div>
               <div class="form-row form-checkbox">
                  <div class="form-field"> <label>Qualité :</label> 
                     <span> <input type="checkbox" <?php if(isset($_POST['radio_qualite']) && $_POST['radio_qualite'] == "Dirigeant d'entreprise"){ echo "checked"; } ?> > <label>Dirigeant d’une société</label> </span>
                     <span> <input type="checkbox" <?php if(isset($_POST['radio_qualite']) && $_POST['radio_qualite'] == 'Entrepreneur individuel'){ echo "checked"; } ?> > <label>Entrepreneur individuel (personne physique)</label> </span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Assisté(e) ou représenté(e) par : </label> <span><b><?php if(isset($_POST['assiste_ou'])){ echo $_POST['assiste_ou'] } ?></b></span></div>
               </div>
               <div class="form-row form-link-two">
                  <div class="form-link"> <a>Identification de l’entreprise en difficulté</a></div>
                  <div class="form-link"> <label><b>N° SIREN : </b></label> <span><b><?php echo $_POST['quel_siren']; ?></b></span></div>
               </div>
               <div class="clearfix"></div>
               <div class="form-row">
                  <div class="form-field"> <label>Forme juridique <span class="notes">(si société)</span> : </label> <span><b> <?php if(isset($_POST['radio_juridique'])){ echo $_POST['radio_juridique']; } ?> </b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Dénomination <span class="notes">(si société ou EIRL)</span> : </label> <span><b><?php echo $_POST['quelle_social']; ?></b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Enseigne : </label> <span><b> <?php $_POST['quelle_commercial']; ?> </b></span></div>
               </div>
               <div class="form-row form-checkbox">
                  <div class="form-field"> 
                     <label>Immatriculation au : </label> 
                     <span> <input type="checkbox" <?php if(isset($_POST['checkbox_est_elle']) && in_array('RCS', $_POST['checkbox_est_elle'])){ echo "checked"; } ?> name=""> <label>RCS <span class="notes">et/ou</span></label> </span>
                     <span> <input type="checkbox" <?php if(isset($_POST['checkbox_est_elle']) && in_array('Répertoire des métiers', $_POST['checkbox_est_elle'])){ echo "checked"; } ?> name=""> <label>Répertoire des métiers <span class="notes">ou</span></label> </span>
                     <span> <input type="checkbox" <?php if(isset($_POST['select_avez']) && $_POST['select_avez'] == 'Oui'){ echo "checked"; } ?> name=""> <label>Non inscrit</label> </span>
                  </div>
               </div>
               <div class="form-row form-checkbox">
                  <div class="form-field">
                     <label>Régime particulier :</label>
                     <span> <input type="checkbox" <?php if(isset($_POST['radio_est_elle']) && $_POST['radio_est_elle'] == 'Oui'){ echo "checked"; } ?> name=""> <label>EIRL</label> </span>
                     <span> <input type="checkbox" <?php if(isset($_POST['radio_entrepreneur']) && $_POST['radio_entrepreneur'] == 'Oui'){ echo "checked"; } ?> name=""> <label>Auto-entrepreneur</label> </span>
                     <span> <input type="checkbox" <?php if(isset($_POST['radio_limitee']) && $_POST['radio_limitee'] == 'Oui'){ echo "checked"; } ?> name=""> <label>Néant</label> </span>
                  </div>
               </div>
               <br> 
               <div class="form-row">
                  <div class="form-field"> <label>Adresse du siège social <span class="notes">(si société)</span> : </label> <span><b><?php echo $_POST['address_social']; ?> <?php echo $_POST['postal_social']; ?> <?php if(isset($_POST['select_country_social'])){ echo $_POST['select_country_social']; } ?> </b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Adresse de l’établissement principal : </label> <span><b></b></span></div>
               </div>
               <div class="form-row form-70-30">
                  <div class="form-field"> <label>Activité : </label> <span><b><?php echo $_POST['textarea_decrivez']; ?></b></span></div>
                  <div class="form-field"> <label>Code APE/NAF : </label> <span><b><?php echo $_POST['vous_connaissez']; ?></b></span></div>
               </div>
               <div class="clearfix"></div>
               <div class="form-row form-70-30">
                  <div class="form-field"> <label>Date de début d'activité : </label> <span><b><?php echo $_POST['date_connaissez']; ?></b></span></div>
                  <div class="form-field"> <label>Date de cessation d'activité <span class="notes">(le cas échéant)</span> : </label> <span><b><?php echo $_POST['date_quelle']; ?></b></span></div>
               </div>
               <div class="form-row form-checkbox form-50-50">
                  <div class="form-field"><label>Capital social <span class="notes">(si société)</span> : </label> <span><b><?php echo $_POST['quel_est_presonne']; ?></b></span></div>
                  <div class="form-field">
                     <span> <input type="checkbox" <?php if(isset($_POST['radio_le_integralement']) && $_POST['radio_le_integralement'] == 'Oui'){ echo $_POST['radio_le_integralement']; } ?> name=""> <label>Libération totale </label> </span>
                     <span> <input type="checkbox" <?php if(isset($_POST['radio_le_partiellement']) && $_POST['radio_le_partiellement'] == 'Oui'){ echo $_POST['radio_le_partiellement']; } ?> name=""> <label>Libération partielle</label> </span>
                  </div>
               </div>
               <br> 
               <div class="form-row">
                  <table border="1px">
                     <thead>
                        <tr>
                           <th>Coordonnées</th>
                           <th>Informations importantes</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <div class="table-section"> <label>Téléphone : </label> <span></span></div>
                              <div class="table-section"> <label>Portable : </label> <span></span></div>
                              <div class="table-section"> <label>Fax : </label> <span></span></div>
                              <div class="table-section"> <label>Email : </label> <span></span></div>
                           </td>
                           <td>
                              <div class="table-section"> <label><b>Date de cessation des paiements : </b></label> <span><b><?php echo $_POST['connaissez_date']; ?></b></span></div>
                              <div class="table-section"> <label><b>Nombre de salariés (à ce jour) : </b></label> <span><b><?php echo $_POST['number_jour']; ?></b></span></div>
                              <div class="table-section"> <label><b>Nombre de salariés (dans les 6 derniers mois) : </b></label> <span><b><?php echo $_POST['number_mois']; ?></b></span></div>
                              <div class="table-section"> <label><b>Chiffre d’affaires du dernier exercice : </b></label> <span></span></div>
                              <div class="table-section"><label>Date de clôture du dernier exercice : </label> <span></span></div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="footer-content first-footer-content">
                  <hr>
                  <p><sup>1</sup> Pour une EURL, cocher « dirigeant d’une société ». Pour une EIRL, cocher « entrepreneur individuel (personne physique) ».</p>
                  <p><sup>2</sup> <b>La demande d’ouverture, lorsqu'elle n'émane pas du débiteur lui-même</b>, ne peut être reçue qu'en vertu d'un <b><u>pouvoir spécial</u></b> qui n'est pas inclus dans la mission de représentation et d'assistance des avocats (Com., 19/07/1988, n°86-15389).</p>
                  <p><sup>3</sup> Date à partir de laquelle il a été impossible de faire face au passif exigible à l’aide de l’actif disponible, c’est-à-dire la date à laquelle l’entreprise n’a plus été en mesure de régler ses dettes (confer l’article L. 631-1 du code de commerce)</p>
               </div>
               <div class="form-row ann_tbl">
                  <table border="1">
                     <thead>
                        <tr>
                           <th></th>
                           <th>Date de clôture</th>
                           <th>Chiffre d’affaires HT</th>
                           <th>Résultat net</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Année N-1</td>
                           <td><?php echo $_POST['annee_date']['row_1']; ?></td>
                           <td><?php echo $_POST['annee_ht']['row_1']; ?></td>
                           <td><?php echo $_POST['annee_net']['row_1']; ?></td>
                        </tr>
                        <tr>
                           <td>Année N-2</td>
                           <td><?php echo $_POST['annee_date']['row_2']; ?></td>
                           <td><?php echo $_POST['annee_ht']['row_2']; ?></td>
                           <td><?php echo $_POST['annee_net']['row_1']; ?></td>
                        </tr>
                        <tr>
                           <td>Année N-3</td>
                           <td><?php echo $_POST['annee_date']['row_3']; ?></td>
                           <td><?php echo $_POST['annee_ht']['row_3']; ?></td>
                           <td><?php echo $_POST['annee_net']['row_1']; ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <br> <br> <br> <br> 
               <div class="form-row">
                  <table border="1">
                     <thead>
                        <th colspan="4">Lieux d'exploitation en dehors de l'établissement principal</th>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="clr-grey">n°</td>
                           <td class="clr-grey">SIRET</td>
                           <td class="clr-grey">Adresse</td>
                           <td class="clr-grey">Greffe dans lequel l'établissement est immatriculé</td>
                        </tr>
                        <?php if($lieux_data != ''){ foreach($lieux_data as $lieux){ ?> 
                        <tr>
                           <td><?php echo $lieux[0]; ?></td>
                           <td><?php echo $lieux[1]; ?></td>
                           <td><?php echo $lieux[2]; ?></td>
                           <td><?php echo $lieux[3]; ?></td>
                        </tr>
                        <? } } if($lieux_data == ''){ echo '<tr><td>&nbsp;</td><td></td><td></td><td></td></tr>'; } ?> 
                     </tbody>
                  </table>
               </div>
               <br> 
               <div class="form-row">
                  <div class="form-field">
                     <label>Avez-vous fait l’objet personnellement d’une procédure de sauvegarde, redressement ou liquidation ou avez-vous été dirigeant d’une société ayant connu l’une de ces procédures ?</label>
                     <span> <input type="checkbox" name=""> <label>oui</label> </span>
                     <span> <input type="checkbox" name=""> <label>Non</label> </span>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-field">
                     <label>Si oui, date d’ouverture, tribunal et s’il y a lieu, dénomination de la société :</label>
                     <span><b><?php echo $_POST['date_quelle2'].', '.$_POST['quel_tribunal'].', '.$_POST['quelle_etait']; ?></b></span>
                  </div>
               </div>
               <br> 
               <div class="form-row">
                  <table border="1">
                     <thead>
                        <tr>
                           <th>Exposez succinctement l’origine des difficultés de l’entreprise</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><span> <?php if(isset($_POST['radio_exposez'])){ foreach($_POST['radio_exposez'] as $radio){ echo $radio; } }else{ echo '&nbsp;'; } ?> </span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <br> 
               <div class="form-row">
                  <table border="1">
                     <thead>
                        <tr>
                           <th>
                              <div class="form-field text-left">
                                 <span>
                                    <input type="checkbox" <?php if(isset($_POST['select_envisagez']) && $_POST['select_envisagez'] == 'Le redressement judiciaire'){ echo "checked"; } ?> name=""> <label>En cas de demande de redressement, exposez les moyens envisagés pour redresser la situation de l’entreprise en difficulté durant la période d’observation</label> 
                                 </span> 
                                 <span>
                                    <input type="checkbox" <?php if(isset($_POST['select_envisagez']) && $_POST['select_envisagez'] == 'La liquidation judiciaire'){ echo "checked"; } ?> name=""> <label>En cas de liquidation judiciaire, expliquez pourquoi le redressement est manifestement impossible</label>
                                 </span>
                              </div>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><span> <?php if(isset($_POST['select_envisagez'])){ if(isset($_POST['radio_moyens'])){ foreach($_POST['radio_moyens'] as $radio_m){ echo $radio_m; } }else if(isset($_POST['textarea_selon'])){ echo $_POST['textarea_selon']; } } if(isset($_POST['select_envisagez']) && $_POST['select_envisagez'] == '' ){ echo '&nbsp;'; } ?> </span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <br> 
               <div class="form-row">
                  <table border="1">
                     <thead>
                        <tr>
                           <th class="tbl-parent-clr" colspan="3">ETAT DU PASSIF (dettes) de l’entreprise ou du patrimoine affecté (EIRL)</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Créanciers (Nom, prénom et adresse /dénomination et siège)</td>
                           <td>Échu et exigible</td>
                           <td>A échoir5</td>
                        </tr>
                        <tr>
                           <td class="tbl-head-clr italic" colspan="3">Salariés :</td>
                        </tr>
                        <tr>
                           <td><?php foreach ($sal_data as $key => $sal) { echo '<div>-<b> '.$sal[0].'</b> '.$sal[1].' '.$sal[2].' '.$sal[3].' '.$sal[4].'</div>';} if(count($sal_data) == 0){ echo '&nbsp;'; } ?></td>
                           <td><?php foreach ($sal_data as $key => $sal) { echo '<div>'.$sal[5].'</div>';} ?></td>
                           <td><?php foreach ($sal_data as $key => $sal) { echo '<div>'.$sal[6].'</div>';} ?></td>
                        </tr>
                        <tr>
                           <td class="tbl-head-clr italic" colspan="3">Établissements financiers (prêts, découverts, mobilisation de créances…) :</td>
                        </tr>
                        <tr>
                           <td><?php foreach ($fin_data as $key => $fin) { echo '<div>- <b>'.$fin[0].'</b> '.$fin[1].' '.$fin[2].' '.$fin[3].' '.$fin[4].'</div>'; } ?></td>
                           <td><?php foreach ($fin_data as $key => $fin) { echo '<div>'.$fin[5].'</div>'; } ?></td>
                           <td><?php foreach ($fin_data as $key => $fin) { echo '<div>'.$fin[6].'</div>'; } ?></td>
                        </tr>
                        <tr>
                           <td class="tbl-head-clr italic" colspan="3">Dettes fiscales et/ou sociales :</td>
                        </tr>
                        <tr>
                           <td width="60%"><?php foreach ($fis_data as $key => $fis) { echo '<div>-<b> '.$fis[0].'</b> '.$fis[1].' '.$fis[2].' '.$fis[3].' '.$fis[4].'</div>';} ?> <?php foreach ($soc_data as $key => $soc) { echo '<div>-<b> '.$soc[0].'</b> '.$soc[1].' '.$soc[2].' '.$soc[3].' '.$soc[4].'</div>';} if(count($fis_data) == 0 && count($soc_data) == 0 ){ echo '&nbsp;'; } ?></td>
                           <td><?php foreach ($fis_data as $key => $fis) { echo '<div>'.$fis[5].'</div>'; } ?> <?php foreach ($soc_data as $key => $soc) { echo '<div>'.$soc[5].'</div>';} ?></td>
                           <td><?php foreach ($fis_data as $key => $fis) { echo '<div>'.$fis[6].'</div>';} ?> <?php foreach ($soc_data as $key => $soc) { echo '<div>'.$soc[6].'</div>'; } ?></td>
                        </tr>
                        <tr>
                           <td class="tbl-head-clr italic" colspan="3">Autres dettes (fournisseurs, crédits-bails, bailleur, divers…) :</td>
                        </tr>
                        <tr>
                           <td><?php foreach ($aut_data as $key => $aut) { echo '<div>-<b> '.$aut[0].'</b> '.$aut[1].' '.$aut[2].' '.$aut[3].' '.$aut[4].'</div>';} if(count($aut_data) == 0){ echo '&nbsp;'; } ?></td>
                           <td><?php foreach ($aut_data as $key => $aut) { echo '<div>'.$aut[5].'</div>'; } ?></td>
                           <td><?php foreach ($aut_data as $key => $aut) { echo '<div>'.$aut[6].'</div>'; } ?></td>
                        </tr>
                        <tr>
                           <td class="tbold italic">TOTAL DU PASSIF (échu et à échoir) :</td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td class="tbold italic">TOTAL GENERAL : </td>
                           <td colspan="2"></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="footer-content footer-content-second">
                  <p><sup>4</sup> L’état du passif (dettes) doit être établi à la date de la demande ou dans les sept jours qui précèdent</p>
                  <p><sup>5</sup> Dettes exigibles = dettes arrivées à échéance et pouvant être immédiatement réclamées par le créancier. Dettes à échoir = dettes non encore arrivées à échéance</p>
               </div>
               <div class="form-row">
                  <table border="1">
                     <thead>
                        <tr>
                           <th class="tbl-parent-clr" colspan="2">ETAT DES ACTIFS de l’entreprise ou du patrimoine affecté (EIRL)</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="clr-grey tcenter">Description</td>
                           <td class="clr-grey tcenter">Montant</td>
                        </tr>
                        <tr>
                           <td class="tbl-head-clr italic" colspan="2">Immobiliers (murs du fonds, maison, terrain… appartenant à la personne exerçant l’activité) :</td>
                        </tr>
                        <tr>
                           <td><?php foreach ($immo_data as $key => $immo) { echo '<div>-<b> '.$immo[0].'</b> '.$immo[1].' '.$immo[2].' '.$immo[3].' '.$immo[4].'</div>';} if(count($immo_data) == 0){ echo '&nbsp;'; } ?></td>
                           <td><?php foreach ($immo_data as $key => $immo) { echo '<div> '.$immo[5].'</div>';} ?></td>
                        </tr>
                        <tr>
                           <td class="tbl-head-clr" colspan="2">Éléments corporels (matériels, mobiliers d’exploitation, véhicules, stocks…) :</td>
                        </tr>
                        <tr>
                           <td><?php foreach ($met_data as $key => $met) { echo '<div>- <b>'.$met[0].'</b> '.$met[1].'</div>';} ?> <?php foreach ($mob_data as $key => $mob) { echo '<div>- <b>'.$mob[0].'</b> '.$mob[1].'</div>';} ?> <?php foreach ($veh_data as $key => $veh) { echo '<div>- <b>'.$veh[0].'</b> '.$veh[1].'</div>';} ?> <?php foreach ($sto_data as $key => $sto) { echo '<div>- <b>'.$sto[0].'</b> '.$sto[1].'</div>';} if(count($met_data) == 0 && count($mob_data) == 0 && count($veh_data) == 0 && count($sto_data) == 0){ echo '&nbsp;'; } ?></td>
                           <td><?php foreach ($met_data as $key => $met) { echo '<div> '.$met[2].'</div>';} ?> <?php foreach ($mob_data as $key => $mob) { echo '<div> '.$mob[2].'</div>';} ?> <?php foreach ($veh_data as $key => $veh) { echo '<div> '.$veh[3].'</div>';} ?> <?php foreach ($sto_data as $key => $sto) { echo '<div>'.$sto[2].'</div>';} ?></td>
                        </tr>
                        <tr>
                           <td class="tbl-head-clr italic" colspan="2">Éléments ou immobilisations incorporels (fonds de commerce, droit au bail, brevets, marques…) :</td>
                        </tr>
                        <tr>
                           <td><?php foreach ($fond_data as $key => $fond) { echo '<div>-<b> '.$fond[0].'</b> '.$fond[1].' '.$fond[2].' '.$fond[3].' '.$fond[4].'</div>';} ?> <?php foreach ($dro_data as $key => $dro) { echo '<div>-<b> '.$dro[0].'</b> '.$dro[1].' '.$dro[2].' '.$dro[3].' '.$dro[4].'</div>';} ?> <?php foreach ($mar_data as $key => $mar) { echo '<div>-<b> '.$mar[0].'</b></div>';} if(count($fond_data) == 0 && count($dro_data) == 0 && count($mar_data) == 0 ){ echo '&nbsp;'; } ?></td>
                           <td><?php foreach ($fond_data as $key => $fond) { echo '<div> '.$fond[5].'</div>';} ?> <?php foreach ($dro_data as $key => $dro) { echo '<div> '.$dro[5].'</div>';} ?> <?php foreach ($mar_data as $key => $mar) { echo '<div> '.$mar[1].'</div>';} ?></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="tbl-head-clr italic">Dû par les clients (estimation globale du compte client, net de mobilisation) <br> <span class="clr-grey">(Détail à donner dans annexe 2)</span> :</td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="tbl-head-clr italic">Titres et participations dans d'autres personnes morales :</td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="tbl-head-clr italic">Crédits de TVA, crédit d’impôts sur les sociétés (carry-back), dégrèvements divers… :</td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td class="tbold italic">TOTAL GENERAL :</td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="clr-red italic">En cas de demande de rétablissement professionnel, préciser en page 7 les modalités d’évaluation des biens.</div>
               <br> 
               <div class="form-row">
                  <table border="1">
                     <thead>
                        <tr>
                           <th class="tbold" style="background-color: #fff;" colspan="4">Situation de trésorerie datant de moins d'un mois</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td rowspan="2">Banques</td>
                           <td class="tcenter">Disponible</td>
                           <td class="tcenter" colspan="2">Découvert</td>
                        </tr>
                        <tr>
                           <td class="tcenter">(seulement si solde positif)</td>
                           <td class="tcenter">Autorisé</td>
                           <td class="tcenter">Utilisé</td>
                        </tr>
                        <?php if(isset($situation_form['situation'])){ foreach($situation_form['situation'] as $sit){ ?> 
                        <tr>
                           <td><?php if($sit[0] != ''){ echo $sit[0]; } else{ echo '&nbsp;'; } ?></td>
                           <td><?php if($sit[1] != ''){ echo $sit[1]; }else{ echo '&nbsp;'; } ?></td>
                           <td><?php echo $sit[2]; ?></td>
                           <td><?php echo $sit[3]; ?></td>
                        </tr>
                        <?php } } ?> <?php if(!isset($situation_form['situation'])){echo '<tr><td colspan="4">&nbsp;</td></tr>';} ?> 
                        <tr>
                           <td colspan="2"><span class="fleft width-10">Caisse :</span> <span></span></td>
                           <td style="text-align: right;"><span>SoldeSolde :</span></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <br> 
               <div class="form-row">
                  <table border="1">
                     <thead>
                        <tr>
                           <th colspan="2" class="tbold" style="background: #fff">SALARIÉS</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="clr-grey tcenter">Nom et prénom</td>
                           <td class="clr-grey tcenter">Adresse</td>
                        </tr>
                        <tr>
                           <td colspan="2" class="tbl-head-clr">Présents dans l'entreprise, ou en congé (maternité, parental, maladie) <span class="clr-grey italic">- ou compléter l’annexe 1</span></td>
                        </tr>
                        <tr>
                           <td><?php if(isset($salaries_form['present'])){ foreach($salaries_form['present'] as $sal){ echo $sal[0].' '.$sal[1]; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($salaries_form['present'])){ foreach($salaries_form['present'] as $sal){ echo $sal[2]; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="tbl-head-clr">Dont contrats rompus ou démissions :</td>
                        </tr>
                        <tr>
                           <td><?php if(isset($salaries_form['contrats'])){ foreach($salaries_form['contrats'] as $sal){ echo $sal[0].' '.$sal[1]; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($salaries_form['contrats'])){ foreach($salaries_form['contrats'] as $sal){ echo $sal[2]; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="tbl-head-clr">Instances en cours au conseil des prud'hommes :</td>
                        </tr>
                        <tr>
                           <td><?php if(isset($salaries_form['conseil'])){ foreach($salaries_form['conseil'] as $sal){ echo $sal[0].' '.$sal[1]; } }else{ echo '&nbsp;'; } if(isset($salaries_form['conseil']) && count($salaries_form['conseil']) == 0){ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($salaries_form['conseil'])){ foreach($salaries_form['conseil'] as $sal){ echo $sal[2]; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                        <tr>
                           <td colspan="2" class="tbl-head-clr">En cas d’instances aux Prud’hommes en cours, nom de l’avocat de l’employeur :</td>
                        </tr>
                        <tr>
                           <td colspan="2">
                              <div class="form-field"> <label>- Existe-t-il un comité d'entreprise : </label> <span> <input type="checkbox" <?php if(isset($_POST['select_entreprise']) && $_POST['select_entreprise'] == 'Oui'){ echo "checked"; } ?> name=""> <label>oui</label> </span> <span> <input type="checkbox" <?php if(isset($_POST['select_entreprise']) && $_POST['select_entreprise'] == 'Non'){ echo "checked"; } ?> name=""> <label>Non</label> </span></div>
                              <div class="form-field"> <label>- À défaut, des délégués du personnel : </label> <span> <input type="checkbox" <?php if(isset($_POST['select_personnel']) && $_POST['select_personnel'] == 'Oui'){ echo "checked"; } ?> name=""> <label>oui</label> </span> <span> <input type="checkbox" <?php if(isset($_POST['select_personnel']) && $_POST['select_personnel'] == 'Non'){ echo "checked"; } ?> name=""> <label>Non</label> </span></div>
                           </td>
                        </tr>
                        <tr>
                           <td colspan="2" class="tbl-head-clr">Prénom, nom et adresse des membres du comité d'entreprise ou à défaut, des délégués du personnel habilités à être entendus par le tribunal (si déjà désignés, annexer une copie du PV d’élection) – Précisez la date de fin du mandat :</td>
                        </tr>
                        <tr>
                           <td><?php if(isset($salaries_form['comite'])){ foreach($salaries_form['comite'] as $sal){ echo $sal[0].' '.$sal[1]; } }else{ echo '&nbsp;'; } if(isset($salaries_form['comite']) && $salaries_form['comite'] == 0 ){ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($salaries_form['comite'])){ foreach($salaries_form['comite'] as $sal){ echo $sal[2]; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                        <tr>
                           <td colspan="2">
                              <div class="form-field"> <label>L’entreprise est-elle en mesure de faire face au paiement des prochains salaires ? </label> <span> <input type="checkbox" name=""> <label>oui</label> </span> <span> <input type="checkbox" name=""> <label>Non</label> </span></div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-row">
                  <div class="form-link"> <a>Cas particuliers</a></div>
               </div>
               <div class="form-row">
                  <table border="1">
                     <thead>
                        <tr>
                           <th colspan="2">Personnes responsables solidairement des dettes sociales <br> (associés de SNC, associés commandités, membres de GIE)</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="clr-grey">Nom et prénom / dénomination</td>
                           <td class="clr-grey">Domicile / Siège</td>
                        </tr>
                        <tr>
                           <td><?php foreach($_POST['associe_name'] as $aso){ echo '<div>'.$aso.'</div>'; } if($_POST['associe_name'] == ''){ echo '&nbsp;'; } ?></td>
                           <td><?php foreach($_POST['associe_number'] as $aso){ echo '<div>'.$aso.'</div>'; } ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-row">
                  <div class="form-field">
                     <label>L’entreprise exerce-t-elle une profession libérale soumise à un statut législatif ou réglementaire ou dont le titre est protégé ?</label>
                     <span> <input type="checkbox" <?php if(isset($_POST['select_exercez']) && $_POST['select_exercez'] == 'Oui'){ echo "checked"; } ?> name=""> <label>Oui</label> </span>
                     <span> <input type="checkbox" <?php if(isset($_POST['select_exercez']) && $_POST['select_exercez'] == 'Non'){ echo "checked"; } ?> name=""> <label>Non</label> </span>
                     <span class="clr-grey">(Si oui, désignation de l’ordre professionnel ou de l’autorité)</span>
                  </div>
               </div>
               <br> 
               <div class="form-row">
                  <div class="form-field"> <label>L’entreprise exploite-t-elle une ou des installations classées au sens du titre Ier du livre V du code de l'environnement ?</label> <span> <input type="checkbox" <?php if(isset($_POST['select_exploitez']) && $_POST['select_exploitez'] == 'Oui'){ echo "checked"; } ?> name=""> <label>Oui</label> </span> <span> <input type="checkbox" <?php if(isset($_POST['select_exploitez']) && $_POST['select_exploitez'] == 'Non'){ echo "checked"; } ?> name=""> <label>Non</label> </span> <span class="clr-grey">(Si oui, fournir la copie de l'autorisation ou la déclaration)</span></div>
               </div>
               <br> 
               <div class="form-row">
                  <div class="form-field"> <label>L’entreprise exploite-t-elle un établissement de crédit, un établissement de monnaie électronique, un établissement de paiement ou est une entreprise d'investissement (R.613-14 s. du code monétaire et financier) ? </label> <span> <input type="checkbox" <?php if(isset($_POST['select_exploitez_vous']) && $_POST['select_exploitez_vous'] == 'Oui'){ echo "checked"; } ?> name=""> <label>Oui</label> </span> <span> <input type="checkbox" <?php if(isset($_POST['select_exploitez_vous']) && $_POST['select_exploitez_vous'] == 'Non'){ echo "checked"; } ?> name=""> <label>Non</label> </span></div>
               </div>
               <div class="form-row">
                  <div class="form-link"> <a>Affiliations</a></div>
               </div>
               <div class="form-row form-50-50">
                  <div class="form-field"> <label>N° URSSAF : </label> <span><b><?php echo $_POST['number_URSSAF']; ?></b></span></div>
                  <div class="form-field"> <label>N° affiliation Pôle emploi : </label> <span><b> <?php $_POST['affiliation']; ?> </b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Convention collective applicable : </label> <span><b> <?php if(isset($_POST['select_applicable'])){ echo $_POST['select_applicable']; } ?> </b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>N°TVA intracommunautaire : </label> <span><b><?php echo $_POST['TVA']; ?></b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-link"> <a>Personnes s’étant portées caution de l’entrepreneur individuel ou de la société </a><span class="clr-grey">(dirigeants, associés, conjoint…)</span></div>
               </div>
               <div class="form-row">
                  <table border="1">
                     <tbody>
                        <tr class="tcenter">
                           <td>Nom des cautions</td>
                           <td>Bénéficiaire (banque)</td>
                           <td>Montant de la caution</td>
                        </tr>
                        <tr>
                           <td>&nbsp;</td>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-row">
                  <table border="1">
                     <thead class="tbl-head-blk">
                        <tr>
                           <th>Documents joints à la demande (article R.631-1 et le cas échéant R.641-1 c.com.)</th>
                           <th>Oui</th>
                           <th>Non</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Extrait d’immatriculation au RCS (Kbis) ou au Répertoire des Métiers de moins de 7 jours <span class="clr-grey italic">(joindre un avis INSEE pour les non-inscrits)</span></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['extrait_produire']['name'])){ if($_FILES['extrait_produire']['name'] != ''){ echo "checked"; } } ?> name=""></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['extrait_produire']['name'])){ if($_FILES['extrait_produire']['name'] == ''){ echo "checked"; } } ?> name=""></td>
                        </tr>
                        <tr>
                           <td>État actif et passif des sûretés et engagement hors bilan de moins de 7 jours <span class="clr-grey italic">(état complet disponible au greffe, service privilèges et nantissements ou sur www.infogreffe.fr)</span></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['etat_produire']['name'])){ if($_FILES['etat_produire']['name'] != ''){ echo "checked"; } } ?> name=""></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['etat_produire']['name'])){ if($_FILES['etat_produire']['name'] == ''){ echo "checked"; } } ?> name=""></td>
                        </tr>
                        <tr>
                           <td>Comptes annuels du dernier exercice</td>
                           <td><input type="checkbox" <?php if(isset($_FILES['annee_file']['name'])){ if($_FILES['annee_file']['name'] != ''){ echo "checked"; } } ?> name=""></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['annee_file']['name'])){ if($_FILES['annee_file']['name'] == ''){ echo "checked"; } } ?> name=""></td>
                        </tr>
                        <tr>
                           <td>Situation de trésorerie de moins d’un mois <span class="clr-grey italic">(relevé bancaire de tous les comptes de l’entreprise et les comptes personnels des entrepreneurs individuels)</span></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['piece_h']['name'])){ if($_FILES['piece_h']['name'] != ''){ echo "checked"; } } ?> name=""></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['piece_h']['name'])){ if($_FILES['piece_h']['name'] == ''){ echo "checked"; } } ?> name=""></td>
                        </tr>
                        <tr>
                           <td>Copie de la pièce d’identité du chef d’entreprise ou du représentant légal <span class="clr-grey italic">(en cours de validité)</span></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['piece_i']['name'])){ if($_FILES['piece_i']['name'] != ''){ echo "checked"; } } ?> name=""></td>
                           <td><input type="checkbox" <?php if(isset($_FILES['piece_i']['name'])){ if($_FILES['piece_i']['name'] == ''){ echo "checked"; } } ?> name=""></td>
                        </tr>
                        <tr>
                           <td colspan="3" class="tcenter tbl-head-clr">Dans le cas où l'un ou l'autre de ces documents ne peut être fourni ou ne peut l'être qu'incomplètement, indiquer les motifs qui empêchent cette production :</td>
                        </tr>
                        <tr>
                           <td colspan="3">&nbsp;</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label class="tbold">Je soussigné(e) demande l’ouverture d’une procédure de :</label> </div>
               </div>
               <div class="form-row form-50-50">
                  <div class="form-field tcenter"> <input type="checkbox" <?php if(isset($_POST['select_envisagez']) && $_POST['select_envisagez'] == 'Le redressement judiciaire'){ echo 'checked'; } ?> name=""> <label>Redressement judiciaire</label> </div>
                  <div class="form-field tcenter"> <input type="checkbox" name=""> <label>Liquidation judiciaire</label> </div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <input type="checkbox" <?php if(isset($_POST['select_envisagez']) && $_POST['select_envisagez'] == 'La liquidation judiciaire'){ echo 'checked'; } ?> name=""> <label>Atteste sur l'honneur l'absence de mandat ad hoc ou de procédure de conciliation relatives à l’entreprise au patrimoine) en difficulté dans les 18 mois précédant la présente demande</label> </div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <input type="checkbox" name=""> <label>En cas de désignation d'un mandataire ad hoc :</label> </div>
               </div>
               <div class="form-row">
                  <ul>
                     <li>Date de la désignation :</li>
                     <li>Autorité qui y a procédé :</li>
                     <li>Nom du mandataire ad hoc :</li>
                  </ul>
               </div>
               <div class="form-row">
                  <div class="form-field"> <input type="checkbox" name=""> <label>En cas d'ouverture d'une procédure de conciliation :</label> </div>
               </div>
               <div class="form-row">
                  <ul>
                     <li>Date de la désignation :</li>
                     <li>Autorité qui y a procédé :</li>
                     <li>Nom du conciliateur :</li>
                  </ul>
               </div>
               <br> 
               <div class="form-row">
                  <div class="form-field"> <label class="italic tbold">A renseigner uniquement en cas de demande de rétablissement professionnel :</label> </div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <input type="checkbox" name=""> <label>Demande l’ouverture d’une procédure de liquidation judiciaire et sollicite le bénéfice d’une procédure de rétablissement professionnel, et atteste satisfaire aux conditions prévues par les articles L. 645-1 et L. 645-2 du code de commerce, à savoir :</label> </div>
               </div>
               <div class="form-row checkbox-margin">
                  <div class="form-field"> <input type="checkbox" name=""> <label>Exercer une activité commerciale ou artisanale, à titre individuel, et n’être pas à ce jour en procédure collective et n’avoir pas fait l’objet, depuis moins de cinq ans, d’une procédure de liquidation judiciaire clôturée pour insuffisance d’actif ou d’une décision de clôture de procédure de rétablissement professionnel</label> </div>
                  <div class="form-field"> <input type="checkbox" name=""> <label>Déclarer que la valeur de réalisation des actifs visés en page 4 est inférieure à 5 000 € Précisez les modalités d’évaluation de ces actifs :</label> </div>
                  <div class="form-field"> <input type="checkbox" name=""> <label>N’avoir employé aucun salarié au cours des six derniers mois et n’être impliqué dans aucune instance prud’homale</label> </div>
                  <div class="form-field"> <input type="checkbox" name=""> <label>Ne pas avoir la qualité d’entrepreneur individuel à responsabilité limitée (EIRL) concernant mon activité en difficulté</label> </div>
               </div>
               <div class="form-row rotate-tbl">
                  <fieldset> Annexe 1 - Liste des salariés </fieldset>
                  <div class="form-field">
                     <table border="1">
                        <tbody>
                           <tr>
                              <td>NOM</td>
                              <?php if(isset($annexe_1['nom'])){ foreach($annexe_1['nom'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>PRENOM</td>
                              <?php if(isset($annexe_1['prenom'])){ foreach($annexe_1['prenom'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>DATE DE NAISSANCE</td>
                              <?php if(isset($annexe_1['date'])){ foreach($annexe_1['date'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>LIEU DE NAISSANCE</td>
                              <?php if(isset($annexe_1['lieu'])){ foreach($annexe_1['lieu'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>ADRESSE POSTALE</td>
                              <?php if(isset($annexe_1['addr'])){ foreach($annexe_1['addr'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>N° SECURITE SOCIALE</td>
                              <?php if(isset($annexe_1['securite'])){ foreach($annexe_1['securite'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>CDD/CDI</td>
                              <?php if(isset($annexe_1['cdd'])){ foreach($annexe_1['cdd'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>TEMPS COMPLET/TEMPS PARTIEL</td>
                              <?php if(isset($annexe_1['temps'])){ foreach($annexe_1['temps'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>QUALIFICATION</td>
                              <?php if(isset($annexe_1['qualif'])){ foreach($annexe_1['qualif'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>SALAIRE BRUT</td>
                              <?php if(isset($annexe_1['salaire'])){ foreach($annexe_1['salaire'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                           <tr>
                              <td>SITUATION PARTICULIERES : ARRET MALADIE, CONGES…..</td>
                              <?php if(isset($annexe_1['situation'])){ foreach($annexe_1['situation'] as $ann){ echo '<td>'.$ann.'</td>'; } }else{ echo '<td></td>'; } ?> 
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="form-row">
                  <fieldset class="tcenter"> Annexe 2 – Renseignements divers </fieldset>
                  <div class="form-link"> <a>Noms et coordonnées des partenaires de l’entreprise</a></div>
               </div>
               <div class="form-row form-50-50">
                  <div class="form-field"> <label>Avocat(s) :</label> <span><b> <?php if(isset($annexe_data['avocat'])){ echo $annexe_data['avocat']; } ?> </b></span></div>
                  <div class="form-field"> <label>Notaire :</label> <span><b> <?php if(isset($annexe_data['notaire'])){ echo $annexe_data['notaire']; } ?> </b></span></div>
               </div>
               <div class="form-row form-50-50">
                  <div class="form-field"> <label>Expert-comptable :</label> <span><b> <?php if(isset($annexe_data['expert_com'])){ echo $annexe_data['expert_com']; } ?> </b></span></div>
                  <div class="form-field"> <label>Commissaire aux comptes :</label> <span><b> <?php if(isset($annexe_data['commissaire_aux'])){ echo $annexe_data['commissaire_aux']; } ?> </b></span></div>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Banques :</label> <span><b></b></span></div>
               </div>
               <div class="form-row">
                  <table border="1">
                     <tbody>
                        <tr class="tcenter">
                           <td>Nom de la banque</td>
                           <td>Adresse de l’agence</td>
                           <td>Nom de l’interlocuteur</td>
                           <td>Numéro de compte</td>
                        </tr>
                        <tr>
                           <td><?php if(isset($annexe_data['banques'])){ foreach($annexe_data['banques'] as $ban){ echo '<div><b>'.$ban[0].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['banques'])){ foreach($annexe_data['banques'] as $ban){ echo '<div><b>'.$ban[1].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['banques'])){ foreach($annexe_data['banques'] as $ban){ echo '<div><b>'.$ban[2].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['banques'])){ foreach($annexe_data['banques'] as $ban){ echo '<div><b>'.$ban[3].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-row">
                  <div class="form-field"> <label>Assurances :</label> </div>
               </div>
               <div class="form-row">
                  <table border="1">
                     <tbody>
                        <tr class="tcenter">
                           <td>Compagnie</td>
                           <td>Nom et adresse de l’agence</td>
                           <td>Nom de l’interlocuteur</td>
                           <td>N° et objet du contrat</td>
                        </tr>
                        <tr>
                           <td><?php if(isset($annexe_data['assur'])){ foreach($annexe_data['assur'] as $asr){ echo '<div><b>'.$asr[0].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['assur'])){ foreach($annexe_data['assur'] as $asr){ echo '<div><b>'.$asr[1].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['assur'])){ foreach($annexe_data['assur'] as $asr){ echo '<div><b>'.$asr[2].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['assur'])){ foreach($annexe_data['assur'] as $asr){ echo '<div><b>'.$asr[3].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-row">
                  <div class="form-link"> <a>Cotisations sociales du chef d’entreprise</a></div>
               </div>
               <div class="form-row form-50-50">
                  <div class="form-field"> <label>Au regard de son statut social, le dirigeant est :</label> </div>
                  <div class="form-field">
                     <span> <input type="checkbox" name=""> <label>majoritaire</label> </span>
                        <span> <input type="checkbox" name=""> <label>minoritaire</label> </span>
                  </div>
               </div>
               <div class="form-row">
                  <table border="1">
                     <tbody>
                        <tr>
                           <td>Nom de la caisse</td>
                           <td>Adresse</td>
                           <td>Montant des cotisations</td>
                           <td>Périodicité</td>
                        </tr>
                        <tr>
                           <td><?php if(isset($annexe_data['sociales'])){ foreach($annexe_data['sociales'] as $soc){ echo '<div><b>'.$soc[0].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['sociales'])){ foreach($annexe_data['sociales'] as $soc){ echo '<div><b>'.$soc[1].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['sociales'])){ foreach($annexe_data['sociales'] as $soc){ echo '<div><b>'.$soc[2].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['banques'])){ foreach($annexe_data['sociales'] as $soc){ echo '<div><b>'.$soc[3].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-row">
                  <div class="form-link"> <a>Créances sur clients</a></div>
               </div>
               <div class="form-row">
                  <table border="1">
                     <tbody>
                        <tr>
                           <td>Nom prénom/Dénomination</td>
                           <td>Adresse</td>
                           <td>Montant des créances</td>
                           <td>Echéance</td>
                        </tr>
                        <tr>
                           <td><?php if(isset($annexe_data['creance'])){ foreach($annexe_data['creance'] as $cre){ echo '<div><b>'.$cre[0].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['creance'])){ foreach($annexe_data['creance'] as $cre){ echo '<div><b>'.$cre[1].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['creance'])){ foreach($annexe_data['creance'] as $cre){ echo '<div><b>'.$cre[2].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['creance'])){ foreach($annexe_data['creance'] as $cre){ echo '<div><b>'.$cre[3].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="form-row">
                  <div class="form-link"> <a>Pour les sociétés, répartition du capital</a></div>
               </div>
               <div class="form-row">
                  <table border="1">
                     <tbody>
                        <tr>
                           <td>Nom et prénom / Dénomination des associés ou actionnaires</td>
                           <td>Nb de titres ou %</td>
                        </tr>
                        <tr>
                           <td><?php if(isset($annexe_data['pour'])){ foreach($annexe_data['pour'] as $pour){ echo '<div><b>'.$pour[0].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                           <td><?php if(isset($annexe_data['pour'])){ foreach($annexe_data['pour'] as $pour){ echo '<div><b>'.$pour[1].'</b></div>'; } }else{ echo '&nbsp;'; } ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>