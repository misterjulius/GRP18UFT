<?php
                      $Kampala = $wakiso = $luweero = $Masaka = $Gulu = $Soroti= $Mpiigi = 0;

                         foreach($View_Agents as $Agents){
                         
                            if($Agents['District']=='Kampala'){
                                $Kampala++;
                            }
                            elseif($Agents['District']=='wakiso'){
                              
                              $wakiso++;
                            }
                            elseif($Agents['District']=='Luweero'){
                              
                              $luweero++;
                            }
                            elseif($Agents['District']=='Masaka'){
                              
                              $Masaka++;
                            }
                            elseif($Agents['District']=='Gulu'){
                              
                              $Gulu++;
                            }
                            elseif($Agents['District']=='Soroti'){
                              
                              $Soroti++;
                            }
                            elseif($Agents['District']=='Mpiigi'){
                              
                              $Mpiigi++;
                            }
                            else{

                            }
                     
                      }  
                     
                      $Title;
                      $dist = array("Kampala"=>$Kampala, "wakiso"=>"$wakiso", "Luweero"=>$luweero, "Masaka"=>$Masaka, "Gulu"=>$Gulu, "Soroti"=>$Soroti, "Mpiigi"=>$Mpiigi);
                      asort($dist);
                      foreach($dist as $district=>$times){
                       
                         if($times==0){
                              $Title="Agent Head";
                              break;
                         }
                         else{
                          $Title="Agent";
                          break;
                         }
                      }
                      
                      ?>
                       <input type="hidden" name="district" value="<?php echo($district); ?>">
                      <input type="hidden" name="Position" value="<?php echo($Title); ?>">
                       <input type="hidden" name="amount" value="0">
                       <input type="hidden" name="status" value="0">
                      <?php
                    ?> 