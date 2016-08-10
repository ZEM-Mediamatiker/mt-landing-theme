<nav class="navbar treecrumb pull-left" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                
                                <a id="admin-dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="icon icon--right"></span>
                                    <?php $options = get_option('mt_theme_options'); echo $options['head_bread_bv_text'];?>
                                </a>
                                
                                <ul class="dropdown-menu" role="menu" aria-labelledby="admin-dropdown">
                                    <li class="dropdown-header">
                                        <a href="<?php $options = get_option('mt_theme_options'); echo $options['head_bread_br_url'];?>" target="_blank">
                                            <?php $options = get_option('mt_theme_options'); echo $options['head_bread_br_text'];?>
                                        </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                BK: Schweizerische Bundeskanzlei
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                EDA: Eidgenössisches Departement für auswärtige Angelegenheiten
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                EDI: Eidgenössisches Department des Innern
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                EJPD: Eidgenössisches Justiz- und Polizeidepartment
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                VBS: Eidgenössisches Department für Verteidigung, Bevölkerungsschutz und Sport
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                EFD: Eidgenössisches Finanzdepartement
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                WBF: Eidgenössisches Departement für Wirtschaft, Bildung und Forschung
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                UVEK: Eidgenössisches Department für Umwelt, Verkehr, Energie und Kommunikation
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                  </nav>