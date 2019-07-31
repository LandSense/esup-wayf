<?php // Copyright (c) 2018 Secure Dimensions GmbH
//Configuration created automatically
//number of processed categories: 51
//number of processed entities: 2804
// Category Social is first. Social login entities do not have a registration authority so we need to print this manually
$IDProviders['social'] = array ( 'Type' => 'category', 'Name' => 'Social Logins');
// Category LandSense is second. LandSense entities do not have a registration authority so we need to print this manually
$IDProviders['landsense'] = array ( 'Type' => 'category', 'Name' => 'LandSense');

$IDProviders['unknown'] = array ( 'Type' => 'category', 'Name' => 'Others', 'de' => array ('Name' => 'Andere'), 'fr' => array ('Name' => 'Autres'), 'it' => array ('Name' => 'Altri'));
//entityID: https://idp.landsense.secure-dimensions.de/idp/shibboleth
$IDProviders['https://idp.landsense.secure-dimensions.de/idp/shibboleth'] = array( 'Type' => 'unknown');
//entityID: https://idp.geo-wiki.org/idp/shibboleth
$IDProviders['https://idp.geo-wiki.org/idp/shibboleth'] = array( 'Type' => 'unknown');
//entityID: https://landsense-idp.geopedia.world/idp/shibboleth
$IDProviders['https://landsense-idp.geopedia.world/idp/shibboleth'] = array( 'Type' => 'unknown');
//entityID: https://idp-landsense.ign.fr/idp/shibboleth
$IDProviders['https://idp-landsense.ign.fr/idp/shibboleth'] = array( 'Type' => 'unknown');
//entityID: https://idp.landsense.seo.org/idp/shibboleth
$IDProviders['https://idp.landsense.seo.org/idp/shibboleth'] = array( 'Type' => 'unknown');
//entityID: https://landsense.inosens.rs/idp/shibboleth
$IDProviders['https://landsense.inosens.rs/idp/shibboleth'] = array( 'Type' => 'unknown');

$IDProviders['urn:mace:landsense.eu'] = array ( 'Type' => 'category', 'Name' => 'urn:mace:landsense.eu');
//entityID: https://social-idp.landsense.eu/simplesaml/saml2/idp/facebook
$IDProviders['https://social-idp.landsense.eu/simplesaml/saml2/idp/facebook'] = array( 'Type' => 'urn:mace:landsense.eu');
//entityID: https://social-idp.landsense.eu/simplesaml/saml2/idp/google
$IDProviders['https://social-idp.landsense.eu/simplesaml/saml2/idp/google'] = array( 'Type' => 'urn:mace:landsense.eu');

$IDProviders['https://www.aai.dfn.de'] = array ( 'Type' => 'category', 'Name' => 'DFN AAI');
//entityID: https://aai-integration.dfn.de/idp/shibboleth
$IDProviders['https://aai-integration.dfn.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://aai.dhv-speyer.de/idp/shibboleth
$IDProviders['https://aai.dhv-speyer.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://aai.helmholtz-muenchen.de/idp/shibboleth
$IDProviders['https://aai.helmholtz-muenchen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://aai.ipk-gatersleben.de/idp/shibboleth
$IDProviders['https://aai.ipk-gatersleben.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://aai.ruhr-uni-bochum.de/idp/shibboleth
$IDProviders['https://aai.ruhr-uni-bochum.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://aai.rz.uni-leipzig.de/idp/shibboleth
$IDProviders['https://aai.rz.uni-leipzig.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://aai.th-wildau.de/idp/shibboleth
$IDProviders['https://aai.th-wildau.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://account.fh-potsdam.de/idp/shibboleth
$IDProviders['https://account.fh-potsdam.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://authent.mh-freiburg.de/idp/shibboleth
$IDProviders['https://authent.mh-freiburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://blblogin.blb-karlsruhe.de/idp/shibboleth
$IDProviders['https://blblogin.blb-karlsruhe.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://bm-aai1.kultus-mv.de/idp/shibboleth
$IDProviders['https://bm-aai1.kultus-mv.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://crux.hrz.tu-freiberg.de/shibboleth
$IDProviders['https://crux.hrz.tu-freiberg.de/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://dkfzshib.inet.dkfz-heidelberg.de/idp/shibboleth
$IDProviders['https://dkfzshib.inet.dkfz-heidelberg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://ephraim.tu-berlin.de/shibboleth
$IDProviders['https://ephraim.tu-berlin.de/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://extlogin.dfn.de/idp/shibboleth
$IDProviders['https://extlogin.dfn.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://identity.fu-berlin.de/idp-fub
$IDProviders['https://identity.fu-berlin.de/idp-fub'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp-serv.uni-magdeburg.de/idp/shibboleth
$IDProviders['https://idp-serv.uni-magdeburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp-vw.hfmdd.de/idp/shibboleth
$IDProviders['https://idp-vw.hfmdd.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ba-dresden.de/idp/shibboleth
$IDProviders['https://idp.ba-dresden.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ba-glauchau.de/idp/shibboleth
$IDProviders['https://idp.ba-glauchau.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ba-leipzig.de/idp/shibboleth
$IDProviders['https://idp.ba-leipzig.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ba-riesa.de/idp/shibboleth
$IDProviders['https://idp.ba-riesa.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.biochem.mpg.de/idp
$IDProviders['https://idp.biochem.mpg.de/idp'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.bsb-muenchen.de/shibboleth
$IDProviders['https://idp.bsb-muenchen.de/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.bsz-bw.de/idp/shibboleth
$IDProviders['https://idp.bsz-bw.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.cas.dhbw.de/idp/shibboleth
$IDProviders['https://idp.cas.dhbw.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.de.dariah.eu/idp/shibboleth
$IDProviders['https://idp.de.dariah.eu/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.dfn-cert.de/idp/shibboleth
$IDProviders['https://idp.dfn-cert.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.dfn.de/idp/shibboleth
$IDProviders['https://idp.dfn.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.dhbw-loerrach.de/idp/shibboleth
$IDProviders['https://idp.dhbw-loerrach.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.dhbw-mannheim.de/idp/shibboleth
$IDProviders['https://idp.dhbw-mannheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.dhbw-vs.de/idp/shibboleth
$IDProviders['https://idp.dhbw-vs.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.dhbw.de/idp/shibboleth
$IDProviders['https://idp.dhbw.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.dkrz.de/idp/shibboleth
$IDProviders['https://idp.dkrz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.dlr.de/idp/shibboleth
$IDProviders['https://idp.dlr.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.eah-jena.de/idp/shibboleth
$IDProviders['https://idp.eah-jena.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.eso.org/idp/shibboleth
$IDProviders['https://idp.eso.org/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.europa-uni.de/idp/shibboleth
$IDProviders['https://idp.europa-uni.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.evhn.de/idp/shibboleth
$IDProviders['https://idp.evhn.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fernuni-hagen.de/idp/shibboleth
$IDProviders['https://idp.fernuni-hagen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-bingen.de/idp/shibboleth
$IDProviders['https://idp.fh-bingen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-dortmund.de/idp/shibboleth
$IDProviders['https://idp.fh-dortmund.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-duesseldorf.de/idp/shibboleth
$IDProviders['https://idp.fh-duesseldorf.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-erfurt.de/idp/shibboleth
$IDProviders['https://idp.fh-erfurt.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-kiel.de/idp/shibboleth
$IDProviders['https://idp.fh-kiel.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-muenster.de/idp/shibboleth
$IDProviders['https://idp.fh-muenster.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-offenburg.de/idp/shibboleth
$IDProviders['https://idp.fh-offenburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-rosenheim.de/idp/shibboleth
$IDProviders['https://idp.fh-rosenheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-schmalkalden.de/simplesaml
$IDProviders['https://idp.fh-schmalkalden.de/simplesaml'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-swf.de/idp/shibboleth
$IDProviders['https://idp.fh-swf.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-trier.de/idp/shibboleth
$IDProviders['https://idp.fh-trier.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fh-westkueste.de/idp/shibboleth
$IDProviders['https://idp.fh-westkueste.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fhws.de/idp/shibboleth
$IDProviders['https://idp.fhws.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fiz-karlsruhe.de/idp/shibboleth
$IDProviders['https://idp.fiz-karlsruhe.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.fraunhofer.de/idp/shibboleth
$IDProviders['https://idp.fraunhofer.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.geomar.de/idp/shibboleth
$IDProviders['https://idp.geomar.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.gesis.org/idp/shibboleth
$IDProviders['https://idp.gesis.org/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.h-ab.de/idp/shibboleth
$IDProviders['https://idp.h-ab.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.h-brs.de/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.h-brs.de/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hab.de/simplesaml
$IDProviders['https://idp.hab.de/simplesaml'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.haw-landshut.de/idp/shibboleth
$IDProviders['https://idp.haw-landshut.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hdm-stuttgart.de/idp/shibboleth
$IDProviders['https://idp.hdm-stuttgart.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hebis.de/uni-frankfurt
$IDProviders['https://idp.hebis.de/uni-frankfurt'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.heilbronn.dhbw.de/idp/shibboleth
$IDProviders['https://idp.heilbronn.dhbw.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hfbk-dresden.de/idp/shibboleth
$IDProviders['https://idp.hfbk-dresden.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hgb-leipzig.de/idp/shibboleth
$IDProviders['https://idp.hgb-leipzig.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hmtm-hannover.de/idp/shibboleth
$IDProviders['https://idp.hmtm-hannover.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hochschule-bc.de/idp/shibboleth
$IDProviders['https://idp.hochschule-bc.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hof-university.de/idp/shibboleth
$IDProviders['https://idp.hof-university.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hrz.tu-darmstadt.de/idp/shibboleth
$IDProviders['https://idp.hrz.tu-darmstadt.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hrz.uni-kassel.de/idp/shibboleth-idp
$IDProviders['https://idp.hrz.uni-kassel.de/idp/shibboleth-idp'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-ansbach.de/idp/shibboleth
$IDProviders['https://idp.hs-ansbach.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-bochum.de/idp/shibboleth
$IDProviders['https://idp.hs-bochum.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-bremen.de/idp/shibboleth
$IDProviders['https://idp.hs-bremen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-coburg.de/idp/shibboleth
$IDProviders['https://idp.hs-coburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-emden-leer.de/idp/shibboleth
$IDProviders['https://idp.hs-emden-leer.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-esslingen.de/idp/shibboleth
$IDProviders['https://idp.hs-esslingen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-gesundheit.de/idp/shibboleth
$IDProviders['https://idp.hs-gesundheit.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-hannover.de/idp/shibboleth
$IDProviders['https://idp.hs-hannover.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-harz.de/shibboleth
$IDProviders['https://idp.hs-harz.de/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-heilbronn.de/idp/shibboleth
$IDProviders['https://idp.hs-heilbronn.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-karlsruhe.de/idp/shibboleth
$IDProviders['https://idp.hs-karlsruhe.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-kehl.de/idp/shibboleth
$IDProviders['https://idp.hs-kehl.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-kempten.de/idp/shibboleth
$IDProviders['https://idp.hs-kempten.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-koblenz.de/idp/shibboleth
$IDProviders['https://idp.hs-koblenz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-lu.de/idp/shibboleth
$IDProviders['https://idp.hs-lu.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-ludwigsburg.de/idp/shibboleth
$IDProviders['https://idp.hs-ludwigsburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-magdeburg.de/idp/shibboleth
$IDProviders['https://idp.hs-magdeburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-pforzheim.de/idp/shibboleth
$IDProviders['https://idp.hs-pforzheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-rottenburg.de/idp/shibboleth
$IDProviders['https://idp.hs-rottenburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-ruhrwest.de/idp/shibboleth
$IDProviders['https://idp.hs-ruhrwest.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-wismar.de/idp/shibboleth
$IDProviders['https://idp.hs-wismar.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hs-woe.de/idp/shibboleth
$IDProviders['https://idp.hs-woe.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hshl.de/idp/shibboleth
$IDProviders['https://idp.hshl.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hszg.de/idp/shibboleth
$IDProviders['https://idp.hszg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.htw-aalen.de/idp/shibboleth
$IDProviders['https://idp.htw-aalen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.htwg-konstanz.de/idp/shibboleth
$IDProviders['https://idp.htwg-konstanz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.hzdr.de/idp/shibboleth
$IDProviders['https://idp.hzdr.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ids-mannheim.de/idp/shibboleth
$IDProviders['https://idp.ids-mannheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.inp-greifswald.de/idp/shibboleth
$IDProviders['https://idp.inp-greifswald.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ipb-halle.de/idp/shibboleth
$IDProviders['https://idp.ipb-halle.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.itmc.tu-dortmund.de:8443/idp/shibboleth
$IDProviders['https://idp.itmc.tu-dortmund.de:8443/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.its.fz-juelich.de/idp/shibboleth
$IDProviders['https://idp.its.fz-juelich.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ksfh.de/idp/shibboleth
$IDProviders['https://idp.ksfh.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ku.de/idp/shibboleth
$IDProviders['https://idp.ku.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.lrz.de/idp/shibboleth
$IDProviders['https://idp.lrz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.mfo.de/idp/shibboleth
$IDProviders['https://idp.mfo.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.mpi-inf.mpg.de/mpii-idp/shibboleth
$IDProviders['https://idp.mpi-inf.mpg.de/mpii-idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.mpi-sws.org/mpis-idp/shibboleth
$IDProviders['https://idp.mpi-sws.org/mpis-idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.mri.bund.de/idp/shibboleth
$IDProviders['https://idp.mri.bund.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.nordakademie.de/idp/shibboleth
$IDProviders['https://idp.nordakademie.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ohm-hochschule.de/idp/shibboleth
$IDProviders['https://idp.ohm-hochschule.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.oth-aw.de/idp/shibboleth
$IDProviders['https://idp.oth-aw.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ph-freiburg.de/idp/shibboleth
$IDProviders['https://idp.ph-freiburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ph-gmuend.de/idp/shibboleth
$IDProviders['https://idp.ph-gmuend.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ph-karlsruhe.de/idp/shibboleth
$IDProviders['https://idp.ph-karlsruhe.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ph-ludwigsburg.de/idp/shibboleth
$IDProviders['https://idp.ph-ludwigsburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ph-weingarten.de/idp/shibboleth
$IDProviders['https://idp.ph-weingarten.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.reutlingen-university.de/idp/shibboleth
$IDProviders['https://idp.reutlingen-university.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.rrz.uni-koeln.de/idp/shibboleth
$IDProviders['https://idp.rrz.uni-koeln.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.rz.uni-augsburg.de/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.rz.uni-augsburg.de/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.rz.uni-bamberg.de/idp/shibboleth
$IDProviders['https://idp.rz.uni-bamberg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.rz.uni-hohenheim.de/idp/shibboleth
$IDProviders['https://idp.rz.uni-hohenheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.rz.uni-kiel.de/idp/shibboleth
$IDProviders['https://idp.rz.uni-kiel.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.rz.unibw-muenchen.de/idp/shibboleth
$IDProviders['https://idp.rz.unibw-muenchen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.scc.kit.edu/idp/shibboleth
$IDProviders['https://idp.scc.kit.edu/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.th-brandenburg.de/idp/shibboleth
$IDProviders['https://idp.th-brandenburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.th-deg.de/idp/shibboleth
$IDProviders['https://idp.th-deg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.tiho-hannover.de/idp/shibboleth
$IDProviders['https://idp.tiho-hannover.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.tu-clausthal.de/idp/shibboleth
$IDProviders['https://idp.tu-clausthal.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.tu-ilmenau.de/idp/shibboleth
$IDProviders['https://idp.tu-ilmenau.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.ub.hsu-hh.de/idp/shibboleth
$IDProviders['https://idp.ub.hsu-hh.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.udk-berlin.de/idp/shibboleth
$IDProviders['https://idp.udk-berlin.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-bayreuth.de/idp/shibboleth
$IDProviders['https://idp.uni-bayreuth.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-bremen.de/idp/shibboleth
$IDProviders['https://idp.uni-bremen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-duesseldorf.de/idp/shibboleth
$IDProviders['https://idp.uni-duesseldorf.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-duisburg-essen.de/idp/shibboleth
$IDProviders['https://idp.uni-duisburg-essen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-flensburg.de/idp/shibboleth
$IDProviders['https://idp.uni-flensburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-greifswald.de/idp/shibboleth
$IDProviders['https://idp.uni-greifswald.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-heidelberg.de
$IDProviders['https://idp.uni-heidelberg.de'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-jena.de/idp/shibboleth
$IDProviders['https://idp.uni-jena.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-kl.de/idp/shibboleth
$IDProviders['https://idp.uni-kl.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-konstanz.de/shibboleth-idp
$IDProviders['https://idp.uni-konstanz.de/shibboleth-idp'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-mannheim.de/idp/shibboleth
$IDProviders['https://idp.uni-mannheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-oldenburg.de/idp/shibboleth
$IDProviders['https://idp.uni-oldenburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-paderborn.de/idp/shibboleth
$IDProviders['https://idp.uni-paderborn.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-potsdam.de/idp/shibboleth
$IDProviders['https://idp.uni-potsdam.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-rostock.de/idp/shibboleth
$IDProviders['https://idp.uni-rostock.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-stuttgart.de/idp/shibboleth
$IDProviders['https://idp.uni-stuttgart.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-tuebingen.de/shibboleth
$IDProviders['https://idp.uni-tuebingen.de/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-ulm.de/idp/shibboleth
$IDProviders['https://idp.uni-ulm.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-wh.de/idp/shibboleth
$IDProviders['https://idp.uni-wh.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.uni-wuppertal.de/idp/shibboleth
$IDProviders['https://idp.uni-wuppertal.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.unimedizin-mainz.de/idp/shibboleth
$IDProviders['https://idp.unimedizin-mainz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.vhb.org/idp/shibboleth
$IDProviders['https://idp.vhb.org/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp.wlb-stuttgart.de/idp/shibboleth
$IDProviders['https://idp.wlb-stuttgart.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp0.uni-saarland.de/idp/shibboleth
$IDProviders['https://idp0.uni-saarland.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp1.desy.de/idp/shibboleth
$IDProviders['https://idp1.desy.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp1.thi.de/idp/shibboleth
$IDProviders['https://idp1.thi.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp1.ufz.de/idp/shibboleth
$IDProviders['https://idp1.ufz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp2.hs-augsburg.de/simplesaml
$IDProviders['https://idp2.hs-augsburg.de/simplesaml'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp2.hs-furtwangen.de/idp/shibboleth
$IDProviders['https://idp2.hs-furtwangen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp2.hswt.de/idp/shibboleth
$IDProviders['https://idp2.hswt.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp2.htw-dresden.de/idp/shibboleth
$IDProviders['https://idp2.htw-dresden.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp2.jacobs-university.de/idp/shibboleth
$IDProviders['https://idp2.jacobs-university.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp2.rfh-koeln.de/idp/shibboleth
$IDProviders['https://idp2.rfh-koeln.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://idp2.tu-dresden.de/idp/shibboleth
$IDProviders['https://idp2.tu-dresden.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://lmuidp.lrz.de/idp/shibboleth
$IDProviders['https://lmuidp.lrz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.beuth-hochschule.de/idp/shibboleth
$IDProviders['https://login.beuth-hochschule.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.crossasia.org/idp/shibboleth
$IDProviders['https://login.crossasia.org/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.dhbw-heidenheim.de/idp/shibboleth
$IDProviders['https://login.dhbw-heidenheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.dhbw-ravensburg.de/idp/shibboleth
$IDProviders['https://login.dhbw-ravensburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.fh-aachen.de/idp/shibboleth
$IDProviders['https://login.fh-aachen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.fh-koeln.de/nidp/saml2/metadata
$IDProviders['https://login.fh-koeln.de/nidp/saml2/metadata'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.hfwu.de/idp/shibboleth
$IDProviders['https://login.hfwu.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.hs-albsig.de/idp/shibboleth
$IDProviders['https://login.hs-albsig.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.hs-mannheim.de/idp/shibboleth
$IDProviders['https://login.hs-mannheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.hs-owl.de/nidp/saml2/metadata
$IDProviders['https://login.hs-owl.de/nidp/saml2/metadata'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.hs-ulm.de/shibboleth-idp
$IDProviders['https://login.hs-ulm.de/shibboleth-idp'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.rz.rwth-aachen.de/shibboleth
$IDProviders['https://login.rz.rwth-aachen.de/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.slub-dresden.de/idp/shibboleth
$IDProviders['https://login.slub-dresden.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.th-bingen.de/idp/shibboleth
$IDProviders['https://login.th-bingen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.uni-hamburg.de/idp/shibboleth
$IDProviders['https://login.uni-hamburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.uni-siegen.de/idp/shibboleth
$IDProviders['https://login.uni-siegen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login.w-hs.de/idp/shibboleth
$IDProviders['https://login.w-hs.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://login3.hs-mittweida.de/idp/shibboleth
$IDProviders['https://login3.hs-mittweida.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://logon.skd.museum/idp/shibboleth
$IDProviders['https://logon.skd.museum/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://my.arthistoricum.net
$IDProviders['https://my.arthistoricum.net'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://my.propylaeum.de
$IDProviders['https://my.propylaeum.de'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://mylogin.uni-freiburg.de/shibboleth
$IDProviders['https://mylogin.uni-freiburg.de/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://saml.dhbw-stuttgart.de/idp/shibboleth
$IDProviders['https://saml.dhbw-stuttgart.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://services.aai.mpg.de/idp/proxy/idp
$IDProviders['https://services.aai.mpg.de/idp/proxy/idp'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shi-idp2.rz.fh-muenchen.de/idp/shibboleth
$IDProviders['https://shi-idp2.rz.fh-muenchen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib-idp.awi.de/idp/shibboleth
$IDProviders['https://shib-idp.awi.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib-idp.cms.hu-berlin.de/idp/shibboleth
$IDProviders['https://shib-idp.cms.hu-berlin.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib-idp.hs-osnabrueck.de/idp/shibboleth
$IDProviders['https://shib-idp.hs-osnabrueck.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib-idp.uni-hildesheim.de/idp/shibboleth
$IDProviders['https://shib-idp.uni-hildesheim.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib-idp.uni-osnabrueck.de/idp/shibboleth
$IDProviders['https://shib-idp.uni-osnabrueck.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib.hk24.de/idp/shibboleth
$IDProviders['https://shib.hk24.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib.itz.uni-halle.de/idp/shibboleth
$IDProviders['https://shib.itz.uni-halle.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib.ph-heidelberg.de/idp/shibboleth
$IDProviders['https://shib.ph-heidelberg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib.rz.tu-harburg.de/idp/shibboleth
$IDProviders['https://shib.rz.tu-harburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib.uni-mainz.de/idp/shibboleth
$IDProviders['https://shib.uni-mainz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib03.hmt-leipzig.de/idp/shibboleth
$IDProviders['https://shib03.hmt-leipzig.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shib1.rz.htwk-leipzig.de/idp/shibboleth
$IDProviders['https://shib1.rz.htwk-leipzig.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibb-idp.hs-weingarten.de/idp/shibboleth
$IDProviders['https://shibb-idp.hs-weingarten.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibb.zalf.de/idp/shibboleth
$IDProviders['https://shibb.zalf.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibbo.hfm-weimar.de/idp/shibboleth
$IDProviders['https://shibbo.hfm-weimar.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibbo.scc.uni-weimar.de/idp/shibboleth
$IDProviders['https://shibbo.scc.uni-weimar.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth-idp.gwdg.de/gwdg/shibboleth
$IDProviders['https://shibboleth-idp.gwdg.de/gwdg/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth-idp.mpg.de/mpg/shibboleth
$IDProviders['https://shibboleth-idp.mpg.de/mpg/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth-idp.uni-goettingen.de/uni/shibboleth
$IDProviders['https://shibboleth-idp.uni-goettingen.de/uni/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth-idp.uni-regensburg.de/idp/shibboleth
$IDProviders['https://shibboleth-idp.uni-regensburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth-idp.uni-wuerzburg.de/idp/shibboleth
$IDProviders['https://shibboleth-idp.uni-wuerzburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth.ba-bautzen.de/idp/shibboleth
$IDProviders['https://shibboleth.ba-bautzen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth.dhbw-karlsruhe.de/idp/shibboleth
$IDProviders['https://shibboleth.dhbw-karlsruhe.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth.hs-kl.de/idp/shibboleth
$IDProviders['https://shibboleth.hs-kl.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth.mh-hannover.de/idp/shibboleth
$IDProviders['https://shibboleth.mh-hannover.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth.uni-bielefeld.de/idp/shibboleth
$IDProviders['https://shibboleth.uni-bielefeld.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth.uni-bonn.de/idp/shibboleth
$IDProviders['https://shibboleth.uni-bonn.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth.uni-trier.de/idp/shibboleth
$IDProviders['https://shibboleth.uni-trier.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth.uni-vechta.de/idp/shibboleth
$IDProviders['https://shibboleth.uni-vechta.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth1.rz.hft-stuttgart.de/idp/shibboleth
$IDProviders['https://shibboleth1.rz.hft-stuttgart.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibboleth2.uni-koblenz.de/idp/shibboleth
$IDProviders['https://shibboleth2.uni-koblenz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://shibweb1.hs-nordhausen.de/idp/shibboleth
$IDProviders['https://shibweb1.hs-nordhausen.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sinope.uni-erfurt.de/idp/shibboleth
$IDProviders['https://sinope.uni-erfurt.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://srv-idp-001.fh-mainz.de/idp/shibboleth
$IDProviders['https://srv-idp-001.fh-mainz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.dshs-koeln.de/idp/shibboleth
$IDProviders['https://sso.dshs-koeln.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.h-da.de/idp/shibboleth
$IDProviders['https://sso.h-da.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.hfph.de/idp/shibboleth
$IDProviders['https://sso.hfph.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.hochschule-rhein-waal.de/idp/shibboleth
$IDProviders['https://sso.hochschule-rhein-waal.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.hs-neu-ulm.de/idp/shibboleth
$IDProviders['https://sso.hs-neu-ulm.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.hs-regensburg.de/idp/shibboleth
$IDProviders['https://sso.hs-regensburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.idm.uni-hannover.de/idp/shibboleth
$IDProviders['https://sso.idm.uni-hannover.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.tu-bs.de
$IDProviders['https://sso.tu-bs.de'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.uni-passau.de/idp/shibboleth
$IDProviders['https://sso.uni-passau.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://sso.vwa-hochschule.de/idp/shibboleth
$IDProviders['https://sso.vwa-hochschule.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://ssoserver.hs-worms.de/idp/shibboleth
$IDProviders['https://ssoserver.hs-worms.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://themis.hs-niederrhein.de/idp/shibboleth
$IDProviders['https://themis.hs-niederrhein.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://tumidp.lrz.de/idp/shibboleth
$IDProviders['https://tumidp.lrz.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://weblogin.htw-berlin.de/idp/shibboleth
$IDProviders['https://weblogin.htw-berlin.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://weblogin.uni-marburg.de/idp/shibboleth
$IDProviders['https://weblogin.uni-marburg.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://whzidp.fh-zwickau.de/idp/shibboleth
$IDProviders['https://whzidp.fh-zwickau.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://wtc.tu-chemnitz.de/shibboleth
$IDProviders['https://wtc.tu-chemnitz.de/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://www.san-netz.de
$IDProviders['https://www.san-netz.de'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://www.sso.uni-erlangen.de/simplesaml/saml2/idp/metadata.php
$IDProviders['https://www.sso.uni-erlangen.de/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://www.vho.de/idpnl
$IDProviders['https://www.vho.de/idpnl'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://www.vho.de/idpvzg
$IDProviders['https://www.vho.de/idpvzg'] = array( 'Type' => 'https://www.aai.dfn.de');
//entityID: https://zividp.uni-muenster.de/idp/shibboleth
$IDProviders['https://zividp.uni-muenster.de/idp/shibboleth'] = array( 'Type' => 'https://www.aai.dfn.de');

$IDProviders['https://irfed.ir/'] = array ( 'Type' => 'category', 'Name' => 'IR Fed');
//entityID: https://shibidp.ipm.ir/idp/shibboleth
$IDProviders['https://shibidp.ipm.ir/idp/shibboleth'] = array( 'Type' => 'https://irfed.ir/');

$IDProviders['http://www.federacionmate.gob.ar'] = array ( 'Type' => 'category', 'Name' => 'MATE');
//entityID: https://idp2.innova-red.net/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp2.innova-red.net/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.federacionmate.gob.ar');
//entityID: https://id-fed.unq.edu.ar/saml2/idp/metadata.php
$IDProviders['https://id-fed.unq.edu.ar/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.federacionmate.gob.ar');
//entityID: https://saml.unsl.edu.ar/simplesaml/saml2/idp/metadata.php
$IDProviders['https://saml.unsl.edu.ar/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.federacionmate.gob.ar');
//entityID: https://id-dev.unc.edu.ar/idp/shibboleth
$IDProviders['https://id-dev.unc.edu.ar/idp/shibboleth'] = array( 'Type' => 'http://www.federacionmate.gob.ar');

$IDProviders['https://www.singaren.net.sg'] = array ( 'Type' => 'category', 'Name' => 'Singapore Access Federation - SGAF');
//entityID: https://vho.sgaf.singaren.net.sg/idp/shibboleth
$IDProviders['https://vho.sgaf.singaren.net.sg/idp/shibboleth'] = array( 'Type' => 'https://www.singaren.net.sg');
//entityID: https://sgaf.singaren.net.sg/simplesaml/saml2/idp/metadata.php
$IDProviders['https://sgaf.singaren.net.sg/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.singaren.net.sg');

$IDProviders['http://www.srce.hr'] = array ( 'Type' => 'category', 'Name' => 'AAI@EduHr');
//entityID: https://login.aaiedu.hr/edugain/saml2/idp/metadata.php
$IDProviders['https://login.aaiedu.hr/edugain/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.srce.hr');

$IDProviders['http://www.surfconext.nl/'] = array ( 'Type' => 'category', 'Name' => 'SURFconext');
//entityID: http://adfs.fom.nl/adfs/services/trust
$IDProviders['http://adfs.fom.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://idp.surfnet.nl
$IDProviders['https://idp.surfnet.nl'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://idp.geant.org
$IDProviders['https://idp.geant.org'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://federation.graafschapcollege.nl/adfs/services/trust
$IDProviders['http://federation.graafschapcollege.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://login.nki.nl/adfs/services/trust
$IDProviders['http://login.nki.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs01.kempel.nl/adfs/services/trust
$IDProviders['http://adfs01.kempel.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://gatekeeper2.tudelft.nl/openaselect/profiles/saml2/
$IDProviders['https://gatekeeper2.tudelft.nl/openaselect/profiles/saml2/'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.hsmarnix.nl/adfs/services/trust
$IDProviders['http://adfs.hsmarnix.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://fs.fcroc.nl/adfs/services/trust
$IDProviders['http://fs.fcroc.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://login.mijnhelicon.nl/nidp/saml2/metadata
$IDProviders['https://login.mijnhelicon.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://nias.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://nias.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://secure.uva.nl/cas
$IDProviders['https://secure.uva.nl/cas'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.nwo.nl/adfs/services/trust
$IDProviders['http://adfs.nwo.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.hanze.nl/adfs/services/trust
$IDProviders['http://adfs.hanze.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://signon.nhlstenden.com/adfs/services/trust
$IDProviders['http://signon.nhlstenden.com/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.albeda.nl/adfs/services/trust
$IDProviders['http://adfs.albeda.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://kitlv.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://kitlv.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://mdb-vw-adfs.zebi.nl/adfs/services/trust
$IDProviders['http://mdb-vw-adfs.zebi.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://utwente.nl/
$IDProviders['https://utwente.nl/'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://namidp.rocvantwente.nl/nidp/saml2/metadata
$IDProviders['https://namidp.rocvantwente.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://conext.authenticatie.ru.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://conext.authenticatie.ru.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://idp.surf.nl
$IDProviders['https://idp.surf.nl'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://idp.nhl.nl/
$IDProviders['https://idp.nhl.nl/'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.naturalis.nl/adfs/services/trust
$IDProviders['http://adfs.naturalis.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://login.ecn.nl/adfs/services/trust
$IDProviders['http://login.ecn.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://idp.ihe.nl/adfs/services/trust
$IDProviders['http://idp.ihe.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://niod.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://niod.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://sso.nikhef.nl/sso/saml2/idp/metadata.php
$IDProviders['https://sso.nikhef.nl/sso/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.ipabo.nl/adfs/services/trust
$IDProviders['http://adfs.ipabo.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.glu.nl/adfs/services/trust
$IDProviders['http://adfs.glu.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://federation.umcg.nl/adfs/services/trust
$IDProviders['http://federation.umcg.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://iisg.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://iisg.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://saml.uvt.nl/saml2/idp/metadata.php
$IDProviders['https://saml.uvt.nl/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://dh.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://dh.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs2.hubrecht.eu/adfs/services/trust
$IDProviders['http://adfs2.hubrecht.eu/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://saml.nin.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://saml.nin.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://sso.egi.eu/edugainidp/shibboleth
$IDProviders['https://sso.egi.eu/edugainidp/shibboleth'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.kb.nl/adfs/services/trust
$IDProviders['http://adfs.kb.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://nidi.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://nidi.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://fs.myhz.nl/adfs/services/trust
$IDProviders['http://fs.myhz.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.tue.nl/adfs/services/trust
$IDProviders['http://sts.tue.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://sso.surfsara.nl/saml/saml2/idp/metadata.php
$IDProviders['https://sso.surfsara.nl/saml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://dans.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://dans.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.has.nl/adfs/services/trust
$IDProviders['http://adfs.has.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://fs.kienict.nl/adfs/services/trust
$IDProviders['http://fs.kienict.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://stsip.mumc.nl/adfs/services/trust
$IDProviders['http://stsip.mumc.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://sso.sron.nl/nidp/saml2/metadata
$IDProviders['https://sso.sron.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://login.zuyd.nl/nidp/saml2/metadata
$IDProviders['https://login.zuyd.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://huc.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://huc.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://huygens.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://huygens.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://meertens.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://meertens.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://namidp.services.uu.nl/nidp/saml2/metadata
$IDProviders['https://namidp.services.uu.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://bureau.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://bureau.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.zadkine.nl/adfs/services/trust
$IDProviders['http://sts.zadkine.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.stw.nl/adfs/services/trust
$IDProviders['http://adfs.stw.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://ccidfederation.clusius.nl/adfs/services/trust
$IDProviders['http://ccidfederation.clusius.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.hvhl.nl/adfs/services/trust
$IDProviders['http://adfs.hvhl.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://idp.sans-ec.nl
$IDProviders['https://idp.sans-ec.nl'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.cito.nl/adfs/services/trust
$IDProviders['http://adfs.cito.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs3host.proxy.rocmn.nl/adfs/services/trust
$IDProviders['http://adfs3host.proxy.rocmn.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs2.fontys.nl/adfs/services/trust
$IDProviders['http://adfs2.fontys.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://login.uaccess.leidenuniv.nl/nidp/saml2/metadata
$IDProviders['https://login.uaccess.leidenuniv.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfsv2.inholland.nl/adfs/services/trust
$IDProviders['http://adfsv2.inholland.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs20.hva.nl/adfs/services/trust
$IDProviders['http://adfs20.hva.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://inloggen.sharepoint.hu.nl/adfs/services/trust
$IDProviders['http://inloggen.sharepoint.hu.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.windesheim.nl/adfs/services/trust
$IDProviders['http://sts.windesheim.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.driestar-educatief.nl/adfs/services/trust
$IDProviders['http://adfs.driestar-educatief.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://rathenau.idp.knaw.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://rathenau.idp.knaw.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://sso.saxion.nl/opensso
$IDProviders['https://sso.saxion.nl/opensso'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.talnet.nl/adfs/services/trust
$IDProviders['http://sts.talnet.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs3prod.aventus.nl/adfs/services/trust
$IDProviders['http://adfs3prod.aventus.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://fides.rivm.nl/adfs/services/trust
$IDProviders['http://fides.rivm.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.deltion.nl/adfs/services/trust
$IDProviders['http://sts.deltion.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://auth.surfmarket.nl/adfs/services/trust
$IDProviders['http://auth.surfmarket.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.drenthecollege.nl/adfs/services/trust
$IDProviders['http://sts.drenthecollege.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://nam.astron.nl/nidp/saml2/metadata
$IDProviders['https://nam.astron.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs1.oba.nl/adfs/services/trust
$IDProviders['http://adfs1.oba.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://sso.han.nl/ssp
$IDProviders['https://sso.han.nl/ssp'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://demeter.wp.swov.nl/adfs/services/trust
$IDProviders['http://demeter.wp.swov.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.fryske-akademy.nl/adfs/services/trust
$IDProviders['http://adfs.fryske-akademy.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://logon.erasmusmc.nl/adfs/services/trust
$IDProviders['http://logon.erasmusmc.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs2.cbs.knaw.nl/adfs/services/trust
$IDProviders['http://adfs2.cbs.knaw.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://sso.eur.nl/opensso
$IDProviders['https://sso.eur.nl/opensso'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://federatie.lumc.nl/adfs/services/trust
$IDProviders['http://federatie.lumc.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://login.nrg.eu/adfs/services/trust
$IDProviders['http://login.nrg.eu/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs-differ.differ.nl/adfs/services/trust
$IDProviders['http://adfs-differ.differ.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.amolf.nl/adfs/services/trust
$IDProviders['http://adfs.amolf.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://fsa.rocmondriaan.nl/adfs/services/trust
$IDProviders['http://fsa.rocmondriaan.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://secure.sintlucas.nl/nidp/saml2/metadata
$IDProviders['https://secure.sintlucas.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://login.maastrichtuniversity.nl/adfs/services/trust
$IDProviders['http://login.maastrichtuniversity.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.wur.nl/adfs/services/trust
$IDProviders['http://sts.wur.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://stsfed.login.vu.nl/adfs/services/trust
$IDProviders['http://stsfed.login.vu.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.che.nl/adfs/services/trust
$IDProviders['http://adfs.che.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://federation.nioo.knaw.nl/adfs/services/trust
$IDProviders['http://federation.nioo.knaw.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.hsleiden.nl/adfs/services/trust
$IDProviders['http://adfs.hsleiden.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://login.ou.nl/oam/fed
$IDProviders['https://login.ou.nl/oam/fed'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://federatie.radboudumc.nl/adfs/services/trust
$IDProviders['http://federatie.radboudumc.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://signon.rug.nl/nidp/saml2/metadata
$IDProviders['https://signon.rug.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.hhs.nl/adfs/services/trust
$IDProviders['http://sts.hhs.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://federatie.trimbos.nl/adfs/services/trust
$IDProviders['http://federatie.trimbos.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://fs.nioz.nl/adfs/services/trust
$IDProviders['http://fs.nioz.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://wayf.onderwijsgroeptilburg.nl/adfs/services/trust
$IDProviders['http://wayf.onderwijsgroeptilburg.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://login.avans.nl/nidp/saml2/metadata
$IDProviders['https://login.avans.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://federation.hdh.nl/adfs/services/trust
$IDProviders['http://federation.hdh.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://sts.roc-nijmegen.nl/adfs/services/trust
$IDProviders['http://sts.roc-nijmegen.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://access.hro.nl/simplesaml/saml2/idp/metadata.php
$IDProviders['https://access.hro.nl/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://federation.rijksmuseum.nl/adfs/services/trust
$IDProviders['http://federation.rijksmuseum.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.artez.nl/adfs/services/trust
$IDProviders['http://adfs.artez.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: https://secure.ahk.nl/nidp/saml2/metadata
$IDProviders['https://secure.ahk.nl/nidp/saml2/metadata'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.knmi.nl/adfs/services/trust
$IDProviders['http://adfs.knmi.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://adfs.nhtv.nl/adfs/services/trust
$IDProviders['http://adfs.nhtv.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://fed.rijnijssel.nl/adfs/services/trust
$IDProviders['http://fed.rijnijssel.nl/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');
//entityID: http://signon.stenden.com/adfs/services/trust
$IDProviders['http://signon.stenden.com/adfs/services/trust'] = array( 'Type' => 'http://www.surfconext.nl/');

$IDProviders['http://feide.no/'] = array ( 'Type' => 'category', 'Name' => 'FEIDE');
//entityID: https://idp.feide.no
$IDProviders['https://idp.feide.no'] = array( 'Type' => 'http://feide.no/');

$IDProviders['http://www.rediris.es/'] = array ( 'Type' => 'category', 'Name' => 'SIR');
//entityID: https://www.rediris.es/sir/redirisidp
$IDProviders['https://www.rediris.es/sir/redirisidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/umaidp
$IDProviders['https://www.rediris.es/sir/umaidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/unedidp
$IDProviders['https://www.rediris.es/sir/unedidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/urvidp
$IDProviders['https://www.rediris.es/sir/urvidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uocidp
$IDProviders['https://www.rediris.es/sir/uocidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/ehuidp
$IDProviders['https://www.rediris.es/sir/ehuidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/umidp
$IDProviders['https://www.rediris.es/sir/umidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/upvidp
$IDProviders['https://www.rediris.es/sir/upvidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/usjidp
$IDProviders['https://www.rediris.es/sir/usjidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/bscidp
$IDProviders['https://www.rediris.es/sir/bscidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/crgidp
$IDProviders['https://www.rediris.es/sir/crgidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uscidp
$IDProviders['https://www.rediris.es/sir/uscidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/ifaeidp
$IDProviders['https://www.rediris.es/sir/ifaeidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://sir2.rediris.es/hub/metadata/federation/production/newharpo
$IDProviders['https://sir2.rediris.es/hub/metadata/federation/production/newharpo'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/esadeidp
$IDProviders['https://www.rediris.es/sir/esadeidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uahidp
$IDProviders['https://www.rediris.es/sir/uahidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/ubidp
$IDProviders['https://www.rediris.es/sir/ubidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uc3midp
$IDProviders['https://www.rediris.es/sir/uc3midp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/dipcidp
$IDProviders['https://www.rediris.es/sir/dipcidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uamidp
$IDProviders['https://www.rediris.es/sir/uamidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/ciematidp
$IDProviders['https://www.rediris.es/sir/ciematidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uniridp
$IDProviders['https://www.rediris.es/sir/uniridp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/upmidp
$IDProviders['https://www.rediris.es/sir/upmidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/ucmidp
$IDProviders['https://www.rediris.es/sir/ucmidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uniaidp
$IDProviders['https://www.rediris.es/sir/uniaidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/unizaridp
$IDProviders['https://www.rediris.es/sir/unizaridp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/iacidp
$IDProviders['https://www.rediris.es/sir/iacidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/csicidp
$IDProviders['https://www.rediris.es/sir/csicidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uvidp
$IDProviders['https://www.rediris.es/sir/uvidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/cesgaidp
$IDProviders['https://www.rediris.es/sir/cesgaidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/cartifidp
$IDProviders['https://www.rediris.es/sir/cartifidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/iramidp
$IDProviders['https://www.rediris.es/sir/iramidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/upcidp
$IDProviders['https://www.rediris.es/sir/upcidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/ucoidp
$IDProviders['https://www.rediris.es/sir/ucoidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/cicbioguneidp
$IDProviders['https://www.rediris.es/sir/cicbioguneidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/udcidp
$IDProviders['https://www.rediris.es/sir/udcidp'] = array( 'Type' => 'http://www.rediris.es/');
//entityID: https://www.rediris.es/sir/uvigoidp
$IDProviders['https://www.rediris.es/sir/uvigoidp'] = array( 'Type' => 'http://www.rediris.es/');

$IDProviders['http://aai.grnet.gr/'] = array ( 'Type' => 'category', 'Name' => 'GRNET');
//entityID: https://aai.certh.gr/idp/shibboleth
$IDProviders['https://aai.certh.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://aai-logon.hcmr.gr/idp/shibboleth
$IDProviders['https://aai-logon.hcmr.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://edugain-proxy.igtf.net/simplesaml/saml2/idp/metadata.php
$IDProviders['https://edugain-proxy.igtf.net/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://gn-vho.grnet.gr/idp/shibboleth
$IDProviders['https://gn-vho.grnet.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://grnetbox.duth.gr/idp/shibboleth
$IDProviders['https://grnetbox.duth.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.admin.grnet.gr/idp/shibboleth
$IDProviders['https://idp.admin.grnet.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.aegean.gr/idp/shibboleth
$IDProviders['https://idp.aegean.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.ariadne-t.gr/idp/shibboleth
$IDProviders['https://idp.ariadne-t.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.aspete.gr/idp/shibboleth
$IDProviders['https://idp.aspete.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.aua.gr/idp/shibboleth
$IDProviders['https://idp.aua.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.aueb.gr/idp/shibboleth
$IDProviders['https://idp.aueb.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.bioacademy.gr/idp/shibboleth
$IDProviders['https://idp.bioacademy.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.cti.gr/idp/shibboleth
$IDProviders['https://idp.cti.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.eie.gr/idp/shibboleth
$IDProviders['https://idp.eie.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.ekt.gr/idp/shibboleth
$IDProviders['https://idp.ekt.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp2.hua.gr/idp/shibboleth
$IDProviders['https://idp2.hua.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://shibboleth-idp.ics.forth.gr/idp/shibboleth/
$IDProviders['https://shibboleth-idp.ics.forth.gr/idp/shibboleth/'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.ihu.gr/idp/shibboleth
$IDProviders['https://idp.ihu.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.ionio.gr/idp/shibboleth
$IDProviders['https://idp.ionio.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idpro.fleming.gr/idp/shibboleth
$IDProviders['https://idpro.fleming.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teiath.gr/idp/shibboleth
$IDProviders['https://idp.teiath.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teicrete.gr/idp/shibboleth
$IDProviders['https://idp.teicrete.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teiep.gr/idp/shibboleth
$IDProviders['https://idp.teiep.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teikav.edu.gr/idp/shibboleth
$IDProviders['https://idp.teikav.edu.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teikoz.gr/idp/shibboleth
$IDProviders['https://idp.teikoz.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teilam.gr/idp/shibboleth
$IDProviders['https://idp.teilam.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teipir.gr/idp/shibboleth
$IDProviders['https://idp.teipir.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teithe.gr/idp/shibboleth
$IDProviders['https://idp.teithe.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.teiwest.gr/idp/shibboleth
$IDProviders['https://idp.teiwest.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.tuc.gr/idp/shibboleth
$IDProviders['https://idp.tuc.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.unipi.gr/idp/shibboleth
$IDProviders['https://idp.unipi.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.uoa.gr/idp/shibboleth
$IDProviders['https://idp.uoa.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.uom.gr/idp/shibboleth
$IDProviders['https://idp.uom.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp2.uop.gr/idp/shibboleth
$IDProviders['https://idp2.uop.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.uowm.gr/idp/shibboleth
$IDProviders['https://idp.uowm.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://idp.uth.gr/idp/shibboleth
$IDProviders['https://idp.uth.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://login.athena-innovation.gr/idp/shibboleth
$IDProviders['https://login.athena-innovation.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://login.iasa.gr/auth/saml2/idp/metadata.php
$IDProviders['https://login.iasa.gr/auth/saml2/idp/metadata.php'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://login.auth.gr/saml2/idp/metadata.php
$IDProviders['https://login.auth.gr/saml2/idp/metadata.php'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://login.ntua.gr/idp/shibboleth
$IDProviders['https://login.ntua.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://login.uoc.gr/idp/shibboleth
$IDProviders['https://login.uoc.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');
//entityID: https://login.noa.gr/idp/shibboleth
$IDProviders['https://login.noa.gr/idp/shibboleth'] = array( 'Type' => 'http://aai.grnet.gr/');

$IDProviders['http://rr.aai.switch.ch/'] = array ( 'Type' => 'category', 'Name' => 'SWITCHaai');
//entityID: https://aai.unifr.ch/idp/shibboleth
$IDProviders['https://aai.unifr.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.fh-htwchur.ch/idp/shibboleth
$IDProviders['https://aai-login.fh-htwchur.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai.unil.ch/idp/shibboleth
$IDProviders['https://aai.unil.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://idp.epfl.ch/idp/shibboleth
$IDProviders['https://idp.epfl.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.unine.ch/idp/shibboleth
$IDProviders['https://aai-login.unine.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.phtg.ch/idp/shibboleth
$IDProviders['https://aai-logon.phtg.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://login2.usi.ch/idp/shibboleth
$IDProviders['https://login2.usi.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.hsr.ch/idp/shibboleth
$IDProviders['https://aai-login.hsr.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://login2.supsi.ch/idp/shibboleth
$IDProviders['https://login2.supsi.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai.ntb.ch/idp/shibboleth
$IDProviders['https://aai.ntb.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.ethz.ch/idp/shibboleth
$IDProviders['https://aai-logon.ethz.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.fhnw.ch/idp/shibboleth
$IDProviders['https://aai-logon.fhnw.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.hfh.ch/idp/shibboleth
$IDProviders['https://aai-login.hfh.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.phsg.ch/idp/shibboleth
$IDProviders['https://aai-login.phsg.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.hes-so.ch/idp/shibboleth
$IDProviders['https://aai-logon.hes-so.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai.unisg.ch/idp/shibboleth
$IDProviders['https://aai.unisg.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.wsl.ch/idp/shibboleth
$IDProviders['https://aai-logon.wsl.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.switch.ch/idp/shibboleth
$IDProviders['https://aai-logon.switch.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-idp.uzh.ch/idp/shibboleth
$IDProviders['https://aai-idp.uzh.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-idp.unibe.ch/idp/shibboleth
$IDProviders['https://aai-idp.unibe.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.hepvs.ch/idp/shibboleth
$IDProviders['https://aai-logon.hepvs.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai.idiap.ch/idp/shibboleth
$IDProviders['https://aai.idiap.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.bfh.ch/idp/shibboleth
$IDProviders['https://aai-logon.bfh.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://idp.hslu.ch/idp/shibboleth
$IDProviders['https://idp.hslu.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.unilu.ch/idp/shibboleth
$IDProviders['https://aai-logon.unilu.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai.insel.ch/idp/shibboleth
$IDProviders['https://aai.insel.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.ph-gr.ch/idp/shibboleth
$IDProviders['https://aai-login.ph-gr.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://idp.unige.ch/idp/shibboleth
$IDProviders['https://idp.unige.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.unibas.ch/idp/shibboleth
$IDProviders['https://aai-logon.unibas.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.phbern.ch/idp/shibboleth
$IDProviders['https://aai-login.phbern.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.snf.ch/idp/shibboleth
$IDProviders['https://aai-login.snf.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.uni.li/idp/shibboleth
$IDProviders['https://aai-logon.uni.li/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.psi.ch/idp/shibboleth
$IDProviders['https://aai-logon.psi.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai.zhaw.ch/idp/shibboleth
$IDProviders['https://aai.zhaw.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.fhsg.ch/idp/shibboleth
$IDProviders['https://aai-logon.fhsg.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-logon.zhbluzern.ch/idp/shibboleth
$IDProviders['https://aai-logon.zhbluzern.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://idp.fernuni.ch/idp/shibboleth
$IDProviders['https://idp.fernuni.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai.phzg.ch/idp/shibboleth
$IDProviders['https://aai.phzg.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://idp.phlu.ch/idp/shibboleth
$IDProviders['https://idp.phlu.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai01.phzh.ch/idp/shibboleth
$IDProviders['https://aai01.phzh.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.ehb-schweiz.ch/idp/shibboleth
$IDProviders['https://aai-login.ehb-schweiz.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://login.teologialugano.ch/idp/shibboleth
$IDProviders['https://login.teologialugano.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.careum.ch/idp/shibboleth
$IDProviders['https://aai-login.careum.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.pmodwrc.ch/idp/shibboleth
$IDProviders['https://aai-login.pmodwrc.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-loginhep.edufr.ch/idp/shibboleth
$IDProviders['https://aai-loginhep.edufr.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://login-idp.libraries.ch/idp/shibboleth
$IDProviders['https://login-idp.libraries.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.hep-bejune.ch/idp/shibboleth
$IDProviders['https://aai-login.hep-bejune.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.euresearch.ch/idp/shibboleth
$IDProviders['https://aai-login.euresearch.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.swissuniversities.ch/idp/shibboleth
$IDProviders['https://aai-login.swissuniversities.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.hepl.ch/idp/shibboleth
$IDProviders['https://aai-login.hepl.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://aai-login.balgrist.ch/idp/shibboleth
$IDProviders['https://aai-login.balgrist.ch/idp/shibboleth'] = array( 'Type' => 'http://rr.aai.switch.ch/');
//entityID: https://cern.ch/login
$IDProviders['https://cern.ch/login'] = array( 'Type' => 'http://rr.aai.switch.ch/');

$IDProviders['http://www.idem.garr.it/'] = array ( 'Type' => 'category', 'Name' => 'IDEM');
//entityID: https://idp.dir.garr.it/idp/shibboleth
$IDProviders['https://idp.dir.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.uniparthenope.it/idp/shibboleth
$IDProviders['https://idp.uniparthenope.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unimore.it/idp/shibboleth
$IDProviders['https://idp.unimore.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://garr-idp-prod.irccs.garr.it/idp/shibboleth
$IDProviders['https://garr-idp-prod.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-iov.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-iov.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-sicilia.izs.garr.it/idp/shibboleth
$IDProviders['https://idp-sicilia.izs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://biblio.bo.cnr.it/idp/shibboleth
$IDProviders['https://biblio.bo.cnr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.uniurb.it/idp/shibboleth
$IDProviders['https://idp.uniurb.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://unigepass.unige.it/idp
$IDProviders['https://unigepass.unige.it/idp'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idea.ifc.cnr.it/idp/shibboleth
$IDProviders['https://idea.ifc.cnr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unipv.it/idp/shibboleth
$IDProviders['https://idp.unipv.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://identity.unife.it/idp/shibboleth
$IDProviders['https://identity.unife.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.cnr.it/idp/shibboleth
$IDProviders['https://idp.cnr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.iit.cnr.it/idp/shibboleth
$IDProviders['https://idp.iit.cnr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.iuav.it/idp/shibboleth
$IDProviders['https://idp.iuav.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unimib.it/idp/shibboleth
$IDProviders['https://idp.unimib.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unive.it/idp/shibboleth
$IDProviders['https://idp.unive.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idem-idp.ilc.cnr.it/idp/shibboleth
$IDProviders['https://idem-idp.ilc.cnr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unitn.it/idp/shibboleth
$IDProviders['https://idp.unitn.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unibg.it/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.unibg.it/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idemshibb.unina.it/idp/shibboleth
$IDProviders['https://idemshibb.unina.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://shibidp.polimi.it/idp/shibboleth
$IDProviders['https://shibidp.polimi.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idem.unina2.it/idp/shibboleth
$IDProviders['https://idem.unina2.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-staf-prod.cineca.it/idp/shibboleth
$IDProviders['https://idp-staf-prod.cineca.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idem.unisalento.it/idp/shibboleth
$IDProviders['https://idem.unisalento.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-iccu.beniculturali.garr.it/idp/shibboleth
$IDProviders['https://idp-iccu.beniculturali.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.infn.it/saml2/idp/metadata.php
$IDProviders['https://idp.infn.it/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idem.unisa.it/idp/shibboleth
$IDProviders['https://idem.unisa.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://login.fmach.eu/idp/shibboleth
$IDProviders['https://login.fmach.eu/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idpunict.unict.it/idp/shibboleth
$IDProviders['https://idpunict.unict.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://id.istat.it/idp/shibboleth
$IDProviders['https://id.istat.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.univpm.it/idp/shibboleth
$IDProviders['https://idp.univpm.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-cro.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-cro.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://giasso.univr.it/idp/idem
$IDProviders['https://giasso.univr.it/idp/idem'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://shibboleth.unisi.it/idp/shibboleth
$IDProviders['https://shibboleth.unisi.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.poliba.it/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.poliba.it/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unical.it/idp/shibboleth
$IDProviders['https://idp.unical.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idem.uniroma2.eu/idp/shibboleth
$IDProviders['https://idem.uniroma2.eu/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-emedea.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-emedea.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idpi.unirc.it/idp/shibboleth
$IDProviders['https://idpi.unirc.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://minosse.unime.it/simplesaml/saml2/idp/metadata.php
$IDProviders['https://minosse.unime.it/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-portici.izs.garr.it/idp/shibboleth
$IDProviders['https://idp-portici.izs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-unitus-prod.cineca.it/idp/shibboleth
$IDProviders['https://idp-unitus-prod.cineca.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unipa.it/idp/shibboleth
$IDProviders['https://idp.unipa.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idemidp.unipmn.it/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idemidp.unipmn.it/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.csp.it/idp/shibboleth
$IDProviders['https://idp.csp.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-oasi.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-oasi.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp01.ogs.trieste.it/idp/shibboleth
$IDProviders['https://idp01.ogs.trieste.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.izs.it/idp/shibboleth
$IDProviders['https://idp.izs.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idpuniba.uniba.it/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idpuniba.uniba.it/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.sssup.it/idp/shibboleth
$IDProviders['https://idp.sssup.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unipg.it/idp/shibboleth
$IDProviders['https://idp.unipg.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unibocconi-prod.it/idp/shibboleth
$IDProviders['https://idp.unibocconi-prod.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.iit.it/idp/shibboleth
$IDProviders['https://idp.iit.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unimc.it/idp/shibboleth
$IDProviders['https://idp.unimc.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://shibidp.unipr.it/idp/shibboleth
$IDProviders['https://shibidp.unipr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idem-idp.imtlucca.it/idp/shibboleth
$IDProviders['https://idem-idp.imtlucca.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-stellamaris.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-stellamaris.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-dgnocchi.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-dgnocchi.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-css.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-css.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.sissa.it/idp/shibboleth
$IDProviders['https://idp.sissa.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.uniroma3.it/idp/shibboleth
$IDProviders['https://idp.uniroma3.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://shibidp.cca.unipd.it/idp/shibboleth
$IDProviders['https://shibidp.cca.unipd.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unica.it/idp/shibboleth
$IDProviders['https://idp.unica.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idem.ced.inaf.it/idp/shibboleth
$IDProviders['https://idem.ced.inaf.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://shibboleth.unifi.it/idp/shibboleth
$IDProviders['https://shibboleth.unifi.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idemfero.units.it/idp/shibboleth
$IDProviders['https://idemfero.units.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unipi.it/idp/shibboleth
$IDProviders['https://idp.unipi.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-unito-prod.cineca.it/idp/shibboleth
$IDProviders['https://idp-unito-prod.cineca.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://shib.unibo.it/idp/shibboleth
$IDProviders['https://shib.unibo.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-ssbar.beniculturali.garr.it/idp/shibboleth
$IDProviders['https://idp-ssbar.beniculturali.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://eodata-idp.user.eocloud.eu/idp/shibboleth
$IDProviders['https://eodata-idp.user.eocloud.eu/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unistrapg.it/idp/shibboleth
$IDProviders['https://idp.unistrapg.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.iulm.it/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.iulm.it/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unint.eu/idp/shibboleth
$IDProviders['https://idp.unint.eu/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.eurac.edu/idp/shibboleth
$IDProviders['https://idp.eurac.edu/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unicam.it/idp/shibboleth
$IDProviders['https://idp.unicam.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp.unibz.it/idp/shibboleth
$IDProviders['https://idp.unibz.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-ifo.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-ifo.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-inrca.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-inrca.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-srpisana.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-srpisana.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-scamillo.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-scamillo.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-maugeri.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-maugeri.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-sdn.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-sdn.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');
//entityID: https://idp-aux.irccs.garr.it/idp/shibboleth
$IDProviders['https://idp-aux.irccs.garr.it/idp/shibboleth'] = array( 'Type' => 'http://www.idem.garr.it/');

$IDProviders['http://eduid.hu'] = array ( 'Type' => 'category', 'Name' => 'eduId.hu');
//entityID: https://idp.niif.hu/shibboleth
$IDProviders['https://idp.niif.hu/shibboleth'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.ppke.hu/idp/shibboleth
$IDProviders['https://idp.ppke.hu/idp/shibboleth'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://papi.kfki.hu/idp/shibboleth
$IDProviders['https://papi.kfki.hu/idp/shibboleth'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.elte.hu/auth/saml2/idp/metadata.php
$IDProviders['https://idp.elte.hu/auth/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://login.bme.hu/idp/shibboleth
$IDProviders['https://login.bme.hu/idp/shibboleth'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.szie.hu/idp/shibboleth
$IDProviders['https://idp.szie.hu/idp/shibboleth'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.sze.hu/idp/shibboleth
$IDProviders['https://idp.sze.hu/idp/shibboleth'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://seka.semmelweis-univ.hu/idp/shibboleth
$IDProviders['https://seka.semmelweis-univ.hu/idp/shibboleth'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.pte.hu/saml2/idp/metadata.php
$IDProviders['https://idp.pte.hu/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.ttk.mta.hu/idp/shibboleth
$IDProviders['https://idp.ttk.mta.hu/idp/shibboleth'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.mta.hu/idp/saml2/idp/metadata.php
$IDProviders['https://idp.mta.hu/idp/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://bismarck.nyme.hu/simplesaml/saml2/idp/metadata.php
$IDProviders['https://bismarck.nyme.hu/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.u-szeged.hu/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.u-szeged.hu/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://l-aai.sztaki.hu/idp
$IDProviders['https://l-aai.sztaki.hu/idp'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.uni-pannon.hu/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.uni-pannon.hu/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.hu');
//entityID: https://idp.uni-eszterhazy.hu/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.uni-eszterhazy.hu/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.hu');

$IDProviders['http://www.swamid.se/'] = array ( 'Type' => 'category', 'Name' => 'SWAMID');
//entityID: https://idp.nordu.net/idp/shibboleth
$IDProviders['https://idp.nordu.net/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: http://idp.chalmers.se/adfs/services/trust
$IDProviders['http://idp.chalmers.se/adfs/services/trust'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.lnu.se/idp/shibboleth
$IDProviders['https://idp.lnu.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://login.du.se/idp/shibboleth
$IDProviders['https://login.du.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.mah.se/idp/shibboleth
$IDProviders['https://idp.mah.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp2-1.slu.se/idp/shibboleth
$IDProviders['https://idp2-1.slu.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://login.it.liu.se/idp/shibboleth
$IDProviders['https://login.it.liu.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.hkr.se/idp/shibboleth
$IDProviders['https://idp.hkr.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.it.su.se/idp/shibboleth
$IDProviders['https://idp.it.su.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://shib-idp-2.oru.se/idp/shibboleth
$IDProviders['https://shib-idp-2.oru.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.umu.se/saml2/idp/metadata.php
$IDProviders['https://idp.umu.se/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.kb.se/idp/shibboleth
$IDProviders['https://idp.kb.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://miunidp.miun.se/idp/shibboleth
$IDProviders['https://miunidp.miun.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.mdh.se/idp/shibboleth
$IDProviders['https://idp.mdh.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.kmh.se/idp/shibboleth
$IDProviders['https://idp.kmh.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.kva.se/idp/shibboleth
$IDProviders['https://idp.kva.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.esh.se/idp/shibboleth
$IDProviders['https://idp.esh.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://swamid2.shh.se/idp/shibboleth
$IDProviders['https://swamid2.shh.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.hv.se/idp/shibboleth
$IDProviders['https://idp.hv.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: http://fs.liu.se/adfs/services/trust
$IDProviders['http://fs.liu.se/adfs/services/trust'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://weblogin.uu.se/idp/shibboleth
$IDProviders['https://weblogin.uu.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://login.idp.hhs.se/idp/shibboleth
$IDProviders['https://login.idp.hhs.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://login.idp.eduid.se/idp.xml
$IDProviders['https://login.idp.eduid.se/idp.xml'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp3.sics.se/idp/shibboleth
$IDProviders['https://idp3.sics.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp2.kkh.se/idp/shibboleth
$IDProviders['https://idp2.kkh.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: http://webproxysrv.uniarts.se/adfs/services/trust
$IDProviders['http://webproxysrv.uniarts.se/adfs/services/trust'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp-v2.konstfack.se/adfs/services/trust
$IDProviders['https://idp-v2.konstfack.se/adfs/services/trust'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idpv3.lu.se/idp/shibboleth
$IDProviders['https://idpv3.lu.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp2.bth.se/idp/shibboleth
$IDProviders['https://idp2.bth.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp-v2.suni.se/adfs/services/trust
$IDProviders['https://idp-v2.suni.se/adfs/services/trust'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idpshibboleth.irf.se/idp/shibboleth
$IDProviders['https://idpshibboleth.irf.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.ths.se/idp/shibboleth
$IDProviders['https://idp.ths.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://swamid.vr.se/idp/shibboleth
$IDProviders['https://swamid.vr.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://weblogin.kau.se/idp/shibboleth
$IDProviders['https://weblogin.kau.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: http://login.fhs.se/adfs/services/trust
$IDProviders['http://login.fhs.se/adfs/services/trust'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp3.it.gu.se/idp/shibboleth
$IDProviders['https://idp3.it.gu.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.hj.se/idp/shibboleth
$IDProviders['https://idp.hj.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.sunet.se/idp
$IDProviders['https://idp.sunet.se/idp'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.ltu.se/idp/shibboleth
$IDProviders['https://idp.ltu.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.hh.se/idp/shibboleth
$IDProviders['https://idp.hh.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp01.gih.se/idp/shibboleth
$IDProviders['https://idp01.gih.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp2.his.se/idp/shibboleth
$IDProviders['https://idp2.his.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp.hb.se/idp/shibboleth
$IDProviders['https://idp.hb.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://saml.sys.kth.se/idp/shibboleth
$IDProviders['https://saml.sys.kth.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://login.ki.se/idp/shibboleth
$IDProviders['https://login.ki.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: http://adfs.rkh.se/adfs/services/trust
$IDProviders['http://adfs.rkh.se/adfs/services/trust'] = array( 'Type' => 'http://www.swamid.se/');
//entityID: https://idp3.hig.se/idp/shibboleth
$IDProviders['https://idp3.hig.se/idp/shibboleth'] = array( 'Type' => 'http://www.swamid.se/');

$IDProviders['http://www.eduid.cz/'] = array ( 'Type' => 'category', 'Name' => 'eduID.cz');
//entityID: https://idp.psu.cas.cz/idp/shibboleth
$IDProviders['https://idp.psu.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.arub.cas.cz/idp/shibboleth
$IDProviders['https://idp.arub.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.vfu.cz/idp/shibboleth
$IDProviders['https://idp.vfu.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.asu.cas.cz/idp/shibboleth
$IDProviders['https://idp.asu.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://kkvy.knihovny.cz/metadata.xml
$IDProviders['https://kkvy.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://vkta.knihovny.cz/metadata.xml
$IDProviders['https://vkta.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.bbmri-eric.eu/idp/shibboleth
$IDProviders['https://idp.bbmri-eric.eu/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.vupp.cz/idp/shibboleth
$IDProviders['https://idp.vupp.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.arup.cas.cz/idp/shibboleth
$IDProviders['https://idp.arup.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.recamo.cz/idp/shibboleth
$IDProviders['https://idp.recamo.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.mendelu.cz/idp/shibboleth
$IDProviders['https://idp.mendelu.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://mkuo.knihovny.cz/metadata.xml
$IDProviders['https://mkuo.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.math.cas.cz/idp/shibboleth
$IDProviders['https://idp.math.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.vsb.cz/idp/shibboleth
$IDProviders['https://idp.vsb.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ufe.cas.cz/idp/shibboleth
$IDProviders['https://idp.ufe.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://aleph20.knihovna-pardubice.cz/idp/shibboleth
$IDProviders['https://aleph20.knihovna-pardubice.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://whoami.cesnet.cz/idp/shibboleth
$IDProviders['https://whoami.cesnet.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.amu.cz/idp/shibboleth
$IDProviders['https://idp.amu.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shib.medvik.cz/idp/shibboleth
$IDProviders['https://shib.medvik.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.utia.cas.cz/idp/shibboleth
$IDProviders['https://idp.utia.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ivb.cas.cz/idp/shibboleth
$IDProviders['https://idp.ivb.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.iapg.cas.cz/idp/shibboleth
$IDProviders['https://idp.iapg.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.upol.cz/idp/shibboleth
$IDProviders['https://idp.upol.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ig.cas.cz/idp/shibboleth
$IDProviders['https://idp.ig.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://mkcho.knihovny.cz/metadata.xml
$IDProviders['https://mkcho.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shibboleth.nkp.cz/idp/shibboleth
$IDProviders['https://shibboleth.nkp.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp2.civ.cvut.cz/idp/shibboleth
$IDProviders['https://idp2.civ.cvut.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://sb.nem-tr.cz/idp/shibboleth
$IDProviders['https://sb.nem-tr.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.icpf.cas.cz/idp/shibboleth
$IDProviders['https://idp.icpf.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shibboleth.vsup.cz/idp/shibboleth
$IDProviders['https://shibboleth.vsup.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.fgu.cas.cz/idp/shibboleth
$IDProviders['https://idp.fgu.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://cas.cuni.cz/idp/shibboleth
$IDProviders['https://cas.cuni.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://eduid.fno.cz/idp/shibboleth
$IDProviders['https://eduid.fno.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://iir.knihovny.cz/metadata.xml
$IDProviders['https://iir.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ujep.cz/idp/shibboleth
$IDProviders['https://idp.ujep.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.lib.cas.cz/idp/shibboleth
$IDProviders['https://idp.lib.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shibo.vkol.cz/idp/shibboleth
$IDProviders['https://shibo.vkol.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.cvgz.cas.cz/idp/shibboleth
$IDProviders['https://idp.cvgz.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.uapp.cz/idp/shibboleth
$IDProviders['https://idp.uapp.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ibt.cas.cz/idp/shibboleth
$IDProviders['https://idp.ibt.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.hiu.cas.cz/idp/shibboleth
$IDProviders['https://idp.hiu.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ssc.cas.cz/idp/shibboleth
$IDProviders['https://idp.ssc.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ibp.cas.cz/idp/shibboleth
$IDProviders['https://idp.ibp.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idptoo.osu.cz/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idptoo.osu.cz/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.upce.cz/idp/shibboleth
$IDProviders['https://idp.upce.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.uhk.cz/idp/shibboleth
$IDProviders['https://idp.uhk.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.cs.cas.cz/idp/shibboleth
$IDProviders['https://idp.cs.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://www.vutbr.cz/SSO/saml2/idp
$IDProviders['https://www.vutbr.cz/SSO/saml2/idp'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.soc.cas.cz/idp/shibboleth
$IDProviders['https://idp.soc.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://sb.nemji.cz/idp/shibboleth
$IDProviders['https://sb.nemji.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shibbo.tul.cz/idp/shibboleth
$IDProviders['https://shibbo.tul.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ugn.cas.cz/idp/shibboleth
$IDProviders['https://idp.ugn.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shibboleth.utb.cz/idp/shibboleth
$IDProviders['https://shibboleth.utb.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.mbu.cas.cz/idp/shibboleth
$IDProviders['https://idp.mbu.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.udu.cas.cz/idp/shibboleth
$IDProviders['https://idp.udu.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ipp.cas.cz/idp/shibboleth
$IDProviders['https://idp.ipp.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://aleph22.svkpl.cz/idp/shibboleth
$IDProviders['https://aleph22.svkpl.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://okpb.knihovny.cz/metadata.xml
$IDProviders['https://okpb.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shibboleth.techlib.cz/idp/shibboleth
$IDProviders['https://shibboleth.techlib.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.img.cas.cz/idp/shibboleth
$IDProviders['https://idp.img.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://tre.knihovny.cz/metadata.xml
$IDProviders['https://tre.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ibot.cas.cz/idp/shibboleth
$IDProviders['https://idp.ibot.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://id.vse.cz/idp/shibboleth
$IDProviders['https://id.vse.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shib.zcu.cz/idp/shibboleth
$IDProviders['https://shib.zcu.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://aleph.svkhk.cz/idp/shibboleth
$IDProviders['https://aleph.svkhk.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://kfbz.knihovny.cz/metadata.xml
$IDProviders['https://kfbz.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp-cro.slu.cz/idp/shibboleth
$IDProviders['https://idp-cro.slu.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.bc.cas.cz/idp/shibboleth
$IDProviders['https://idp.bc.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ipm.cas.cz/idp/shibboleth
$IDProviders['https://idp.ipm.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://gryf.mlp.cz/idp/shibboleth
$IDProviders['https://gryf.mlp.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.isibrno.cas.cz/idp/shibboleth
$IDProviders['https://idp.isibrno.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://marisa.uochb.cas.cz/simplesaml/saml2/idp/metadata.php
$IDProviders['https://marisa.uochb.cas.cz/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.gli.cas.cz/idp/shibboleth
$IDProviders['https://idp.gli.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ujf.cas.cz/idp/shibboleth
$IDProviders['https://idp.ujf.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://wsso.vscht.cz/idp/shibboleth
$IDProviders['https://wsso.vscht.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://kjdpb.knihovny.cz/metadata.xml
$IDProviders['https://kjdpb.knihovny.cz/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.ueb.cas.cz/idp/shibboleth
$IDProviders['https://idp.ueb.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://helium.jcu.cz/idp/shibboleth
$IDProviders['https://helium.jcu.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.unob.cz/idp/shibboleth
$IDProviders['https://idp.unob.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://katalog.svkos.cz/idp/shibboleth
$IDProviders['https://katalog.svkos.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://shibboleth.mzk.cz/simplesaml/metadata.xml
$IDProviders['https://shibboleth.mzk.cz/simplesaml/metadata.xml'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp2.ics.muni.cz/idp/shibboleth
$IDProviders['https://idp2.ics.muni.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.itam.cas.cz/idp/shibboleth
$IDProviders['https://idp.itam.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');
//entityID: https://idp.fzu.cas.cz/idp/shibboleth
$IDProviders['https://idp.fzu.cas.cz/idp/shibboleth'] = array( 'Type' => 'http://www.eduid.cz/');

$IDProviders['http://www.csc.fi/haka'] = array ( 'Type' => 'category', 'Name' => 'HAKA');
//entityID: https://tullbommen.arcada.fi/simplesaml/
$IDProviders['https://tullbommen.arcada.fi/simplesaml/'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://login.helsinki.fi/shibboleth
$IDProviders['https://login.helsinki.fi/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.metropolia.fi/idp
$IDProviders['https://idp.metropolia.fi/idp'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.savonia.fi/idp/shibboleth
$IDProviders['https://idp.savonia.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.ulapland.fi/idp/shibboleth
$IDProviders['https://idp.ulapland.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://tunnistus.thl.fi/idp
$IDProviders['https://tunnistus.thl.fi/idp'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.abo.fi/idp/shibboleth
$IDProviders['https://idp.abo.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://login.jyu.fi/idp/shibboleth
$IDProviders['https://login.jyu.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://shibboleth.uta.fi/idp/shibboleth
$IDProviders['https://shibboleth.uta.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp2.tamk.fi
$IDProviders['https://idp2.tamk.fi'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.lut.fi
$IDProviders['https://idp.lut.fi'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.shh.fi/idp/shibboleth
$IDProviders['https://idp.shh.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp1.turkuamk.fi/idp/shibboleth
$IDProviders['https://idp1.turkuamk.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://sipuli.fmi.fi/idp/shibboleth
$IDProviders['https://sipuli.fmi.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://login.oulu.fi/idp/shibboleth
$IDProviders['https://login.oulu.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://sso.utu.fi/sso-idp
$IDProviders['https://sso.utu.fi/sso-idp'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.csc.fi/idp/shibboleth
$IDProviders['https://idp.csc.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.tut.fi/shibboleth2
$IDProviders['https://idp.tut.fi/shibboleth2'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.uef.fi/idp/shibboleth
$IDProviders['https://idp.uef.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.aalto.fi/idp/shibboleth
$IDProviders['https://idp.aalto.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://idp.uniarts.fi/shibboleth
$IDProviders['https://idp.uniarts.fi/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://haka.saimia.fi/idp/shibboleth
$IDProviders['https://haka.saimia.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');
//entityID: https://login.uwasa.fi/idp/shibboleth
$IDProviders['https://login.uwasa.fi/idp/shibboleth'] = array( 'Type' => 'http://www.csc.fi/haka');

$IDProviders['http://federation.belnet.be/'] = array ( 'Type' => 'category', 'Name' => 'Belnet Federation');
//entityID: urn:mace:kuleuven.be:kulassoc:khleuven.be
$IDProviders['urn:mace:kuleuven.be:kulassoc:khleuven.be'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.craw.eu/idp/shibboleth
$IDProviders['https://idp.craw.eu/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.ulb.ac.be/idp/shibboleth
$IDProviders['https://idp.ulb.ac.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.vub.ac.be/idp/shibboleth
$IDProviders['https://idp.vub.ac.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.uclouvain.be/idp/shibboleth
$IDProviders['https://idp.uclouvain.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idpstaff-ha.belnet.be/idp/shibboleth
$IDProviders['https://idpstaff-ha.belnet.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://identity.ugent.be/simplesaml/saml2/idp/metadata.php
$IDProviders['https://identity.ugent.be/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://identity.unamur.be/idp/shibboleth
$IDProviders['https://identity.unamur.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idpx.ua.ac.be/idp/shibboleth
$IDProviders['https://idpx.ua.ac.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: urn:mace:kuleuven.be:kulassoc:kuleuven.be
$IDProviders['urn:mace:kuleuven.be:kulassoc:kuleuven.be'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.uhasselt.be:443/idp/shibboleth
$IDProviders['https://idp.uhasselt.be:443/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.condorcet.be/idp/shibboleth
$IDProviders['https://idp.condorcet.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.eduhainaut.be/idp/shibboleth
$IDProviders['https://idp.eduhainaut.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.hainaut-promsoc.be/idp/shibboleth
$IDProviders['https://idp.hainaut-promsoc.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idps.ulg.ac.be/idp/shibboleth
$IDProviders['https://idps.ulg.ac.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.hogent.be/idp
$IDProviders['https://idp.hogent.be/idp'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://sso.vito.be
$IDProviders['https://sso.vito.be'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.kdg.be/idp/shibboleth
$IDProviders['https://idp.kdg.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: http://sts1.vib.be/adfs/services/trust
$IDProviders['http://sts1.vib.be/adfs/services/trust'] = array( 'Type' => 'http://federation.belnet.be/');
//entityID: https://idp.howest.be/idp/shibboleth
$IDProviders['https://idp.howest.be/idp/shibboleth'] = array( 'Type' => 'http://federation.belnet.be/');

$IDProviders['http://cafe.rnp.br'] = array ( 'Type' => 'category', 'Name' => 'CAFe');
//entityID: https://cafe-01.uffs.edu.br/idp/shibboleth
$IDProviders['https://cafe-01.uffs.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.cp2.g12.br/idp/shibboleth
$IDProviders['https://cafe.cp2.g12.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://vmshib64.ufrpe.br/idp/shibboleth
$IDProviders['https://vmshib64.ufrpe.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ibict.br/idp/shibboleth
$IDProviders['https://cafe.ibict.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp3.ufrb.edu.br/idp/shibboleth
$IDProviders['https://idp3.ufrb.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ifam.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.ifam.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://caroa.univasf.edu.br/idp/shibboleth
$IDProviders['https://caroa.univasf.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ufra.edu.br/idp/shibboleth
$IDProviders['https://cafe.ufra.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufpa.br/idp/shibboleth
$IDProviders['https://idp.ufpa.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.idp.edu.br/idp/shibboleth
$IDProviders['https://cafe.idp.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ifpe.edu.br/idp/shibboleth
$IDProviders['https://idp.ifpe.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.unicap.br/idp/shibboleth
$IDProviders['https://shibboleth.unicap.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://srvcafe.cgee.org.br/idp/shibboleth
$IDProviders['https://srvcafe.cgee.org.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ifmg.edu.br/idp/shibboleth
$IDProviders['https://cafe.ifmg.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://coruja.museu-goeldi.br/idp/shibboleth
$IDProviders['https://coruja.museu-goeldi.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ifal.edu.br/idp/shibboleth
$IDProviders['https://idp.ifal.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.fapeal.br/idp/shibboleth
$IDProviders['https://idp.fapeal.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ufmg.br/idp/shibboleth
$IDProviders['https://cafe.ufmg.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.unb.br/idp/shibboleth
$IDProviders['https://shibboleth.unb.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.accamargo.org.br/idp/shibboleth
$IDProviders['https://cafe.accamargo.org.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://ashiok.ufpe.br/idp/shibboleth
$IDProviders['https://ashiok.ufpe.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.uepa.br/idp/shibboleth
$IDProviders['https://cafe.uepa.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.pucminas.br/idp/shibboleth
$IDProviders['https://cafe.pucminas.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufac.br/idp/shibboleth
$IDProviders['https://idp.ufac.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp-cafe.unifal-mg.edu.br/idp/shibboleth
$IDProviders['https://idp-cafe.unifal-mg.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ufba.br/idp/shibboleth
$IDProviders['https://cafe.ufba.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.uncisal.edu.br/idp/shibboleth
$IDProviders['https://idp.uncisal.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.cnpem.br/idp/shibboleth
$IDProviders['https://shibboleth.cnpem.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://rcafe01s.inmetro.gov.br/idp/shibboleth
$IDProviders['https://rcafe01s.inmetro.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://svr-cafe.unaerp.br/idp/shibboleth
$IDProviders['https://svr-cafe.unaerp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://itacare.bahiana.edu.br/idp/shibboleth
$IDProviders['https://itacare.bahiana.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://aquiles.iepa.ap.gov.br/idp/shibboleth
$IDProviders['https://aquiles.iepa.ap.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.unitau.br/idp/shibboleth
$IDProviders['https://cafe.unitau.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ifsudestemg.edu.br/idp/shibboleth
$IDProviders['https://idp.ifsudestemg.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.usf.edu.br/idp/shibboleth
$IDProviders['https://cafe.usf.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ufcg.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.ufcg.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.espm.br/idp/shibboleth
$IDProviders['https://cafe.espm.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.inpa.gov.br/idp/shibboleth
$IDProviders['https://idp.inpa.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://ifs00sv056.ifsul.edu.br/idp/shibboleth
$IDProviders['https://ifs00sv056.ifsul.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://conilon.fapesp.br/idp/shibboleth
$IDProviders['https://conilon.fapesp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://ServerCAFe.iftm.edu.br/idp/shibboleth
$IDProviders['https://ServerCAFe.iftm.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp-cafe.ufmt.br/idp/shibboleth
$IDProviders['https://idp-cafe.ufmt.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp-cafe.uerj.br/idp/shibboleth
$IDProviders['https://idp-cafe.uerj.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.unesp.br/idp/shibboleth
$IDProviders['https://cafe.unesp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe1.uesc.br/idp/shibboleth
$IDProviders['https://cafe1.uesc.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://homolog.idp.rnp.br/idp/shibboleth
$IDProviders['https://homolog.idp.rnp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ufrrj.br/idp/shibboleth
$IDProviders['https://cafe.ufrrj.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibb.ufersa.edu.br/idp/shibboleth
$IDProviders['https://shibb.ufersa.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ien.gov.br/idp/shibboleth
$IDProviders['https://cafe.ien.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://siaiap36.univali.br/idp/shibboleth
$IDProviders['https://siaiap36.univali.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.unisantos.br/idp/shibboleth
$IDProviders['https://idp.unisantos.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.on.br/idp/shibboleth
$IDProviders['https://shibboleth.on.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://srvcafe.uniso.br/idp/shibboleth
$IDProviders['https://srvcafe.uniso.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ifsp.edu.br/idp/shibboleth
$IDProviders['https://cafe.ifsp.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.unemat.br/idp/shibboleth
$IDProviders['https://cafe.unemat.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shib.ufg.br/idp/shibboleth
$IDProviders['https://shib.ufg.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ifro.edu.br/idp/shibboleth
$IDProviders['https://cafe.ifro.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idprnp.univates.br/idp/shibboleth
$IDProviders['https://idprnp.univates.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://Shibboleth3.uem.br/idp/shibboleth
$IDProviders['https://Shibboleth3.uem.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://joaodebarro.iffarroupilha.edu.br/idp/shibboleth
$IDProviders['https://joaodebarro.iffarroupilha.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufcspa.edu.br/idp/shibboleth
$IDProviders['https://idp.ufcspa.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe02.unicentro.br/idp/shibboleth
$IDProviders['https://cafe02.unicentro.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://jett.ufsj.edu.br/idp/shibboleth
$IDProviders['https://jett.ufsj.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ifsertao-pe.edu.br/idp/shibboleth
$IDProviders['https://cafe.ifsertao-pe.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://capuccino.iff.edu.br/idp/shibboleth
$IDProviders['https://capuccino.iff.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ita.br/idp/shibboleth
$IDProviders['https://shibboleth.ita.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufca.edu.br/idp/shibboleth
$IDProviders['https://idp.ufca.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ucdb.br/idp/shibboleth
$IDProviders['https://cafe.ucdb.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafeprdapl01.unisul.br/idp/shibboleth
$IDProviders['https://cafeprdapl01.unisul.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://capes.fcmsantacasasp.edu.br/idp/shibboleth
$IDProviders['https://capes.fcmsantacasasp.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.uneb.br/idp/shibboleth
$IDProviders['https://shibboleth.uneb.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.mast.br/idp/shibboleth
$IDProviders['https://idp.mast.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ifap.edu.br/idp/shibboleth
$IDProviders['https://idp.ifap.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.sbc.org.br/idp/shibboleth
$IDProviders['https://cafe.sbc.org.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.cetem.gov.br/idp/shibboleth
$IDProviders['https://shibboleth.cetem.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://sau09ret.ifbaiano.edu.br/idp/shibboleth
$IDProviders['https://sau09ret.ifbaiano.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ifpa.edu.br/idp/shibboleth
$IDProviders['https://cafe.ifpa.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ufsm.br/idp/shibboleth
$IDProviders['https://shibboleth.ufsm.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shib.ifgoiano.edu.br/idp/shibboleth
$IDProviders['https://shib.ifgoiano.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://dedestris.intranet.ifrj.edu.br/idp/shibboleth
$IDProviders['https://dedestris.intranet.ifrj.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp-cafe.ifrr.edu.br/idp/shibboleth
$IDProviders['https://idp-cafe.ifrr.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp-cafe.ufc.br/idp/shibboleth
$IDProviders['https://idp-cafe.ufc.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.unidavi.edu.br/idp/shibboleth
$IDProviders['https://idp.unidavi.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.urca.br/idp/shibboleth
$IDProviders['https://idp.urca.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.cefet-rj.br/idp/shibboleth
$IDProviders['https://shibboleth.cefet-rj.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://infra063.umc.br/idp/shibboleth
$IDProviders['https://infra063.umc.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.cti.gov.br/idp/shibboleth
$IDProviders['https://cafe.cti.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://bradyon.cdtn.br/idp/shibboleth
$IDProviders['https://bradyon.cdtn.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth-idp.pucrs.br/idp/shibboleth
$IDProviders['https://shibboleth-idp.pucrs.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.udesc.br/idp/shibboleth
$IDProviders['https://cafe.udesc.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe2.ufsb.edu.br/idp/shibboleth
$IDProviders['https://cafe2.ufsb.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.sgi.cefetmg.br/idp/shibboleth
$IDProviders['https://idp.sgi.cefetmg.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://Uter.ufob.edu.br/idp/shibboleth
$IDProviders['https://Uter.ufob.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ulbra.br/idp/shibboleth
$IDProviders['https://shibboleth.ulbra.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idpcafe.ufjf.br/idp/shibboleth
$IDProviders['https://idpcafe.ufjf.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ifpr.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.ifpr.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.cbpf.br/idp/shibboleth
$IDProviders['https://shibboleth.cbpf.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://pitomba.unifesspa.edu.br/idp/shibboleth
$IDProviders['https://pitomba.unifesspa.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://APLDC1VPR0018.fgv.br/idp/shibboleth
$IDProviders['https://APLDC1VPR0018.fgv.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.mctic.gov.br/idp/shibboleth
$IDProviders['https://cafe.mctic.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://ifg-srv-cafe.ifg.edu.br/idp/shibboleth
$IDProviders['https://ifg-srv-cafe.ifg.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ceitec.gov.br/idp/shibboleth
$IDProviders['https://idp.ceitec.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.metodista.br/idp/shibboleth
$IDProviders['https://cafe.metodista.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ifpb.edu.br/idp/shibboleth
$IDProviders['https://idp.ifpb.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.univille.br/idp/shibboleth
$IDProviders['https://cafe.univille.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ufam.edu.br/idp/shibboleth
$IDProviders['https://cafe.ufam.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.setic.ufsc.br/idp/shibboleth
$IDProviders['https://cafe.setic.ufsc.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.unipampa.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.unipampa.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ifc.edu.br/idp/shibboleth
$IDProviders['https://idp.ifc.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.furb.br/idp/shibboleth
$IDProviders['https://idp.furb.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://ipaumirim.uece.br/idp/shibboleth
$IDProviders['https://ipaumirim.uece.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idpcafe.uniube.br/idp/shibboleth
$IDProviders['https://idpcafe.uniube.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe-v3.upf.br/idp/shibboleth
$IDProviders['https://cafe-v3.upf.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ifes.edu.br/idp/shibboleth
$IDProviders['https://cafe.ifes.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.capes.gov.br/idp/shibboleth
$IDProviders['https://idp.capes.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.cnen.gov.br/idp/shibboleth
$IDProviders['https://cafe.cnen.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://srvcidasc42.cidasc.sc.gov.br/idp/shibboleth
$IDProviders['https://srvcidasc42.cidasc.sc.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.lncc.br/idp/shibboleth
$IDProviders['https://cafe.lncc.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://rnp.unip.br/idp/shibboleth
$IDProviders['https://rnp.unip.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ifb.edu.br/idp/shibboleth
$IDProviders['https://cafe.ifb.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.fucape.br/idp/shibboleth
$IDProviders['https://cafe.fucape.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idpv3.lna.br/idp/shibboleth
$IDProviders['https://idpv3.lna.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.insa.gov.br/idp/shibboleth
$IDProviders['https://shibboleth.insa.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.unifran.br/idp/shibboleth
$IDProviders['https://cafe.unifran.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ucs.br/idp/shibboleth
$IDProviders['https://cafe.ucs.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.unijui.edu.br/idp/shibboleth
$IDProviders['https://idp.unijui.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://login.ufrgs.br/idp/shibboleth
$IDProviders['https://login.ufrgs.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.embrapii.org.br/idp/shibboleth
$IDProviders['https://shibboleth.embrapii.org.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.int.gov.br/idp/shibboleth
$IDProviders['https://cafe.int.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.dr.ufu.br/idp/shibboleth
$IDProviders['https://idp.dr.ufu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe02.unicamp.br/idp/shibboleth
$IDProviders['https://cafe02.unicamp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe-gateway.ifce.edu.br/idp/shibboleth
$IDProviders['https://cafe-gateway.ifce.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.unifor.br/idp/shibboleth
$IDProviders['https://shibboleth.unifor.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.itep.br/idp/shibboleth
$IDProviders['https://idp.itep.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://rastreador.ifba.edu.br/idp/shibboleth
$IDProviders['https://rastreador.ifba.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ufla.br/idp/shibboleth
$IDProviders['https://shibboleth.ufla.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.coppe.ufrj.br/idp/shibboleth
$IDProviders['https://shibboleth.coppe.ufrj.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.pucgoias.edu.br/idp/shibboleth
$IDProviders['https://cafe.pucgoias.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.fiocruz.br/idp/shibboleth
$IDProviders['https://cafe.fiocruz.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.sede.embrapa.br/idp/shibboleth
$IDProviders['https://cafe.sede.embrapa.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://rtrvirshib.ifmt.edu.br/idp/shibboleth
$IDProviders['https://rtrvirshib.ifmt.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://apu.uepb.edu.br/idp/shibboleth
$IDProviders['https://apu.uepb.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://1010SE17FAM-V03.famerp.br/idp/shibboleth
$IDProviders['https://1010SE17FAM-V03.famerp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ifrs.edu.br/idp/shibboleth
$IDProviders['https://cafe.ifrs.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ufpel.edu.br/idp/shibboleth
$IDProviders['https://cafe.ufpel.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://srvcafe.ifms.edu.br/idp/shibboleth
$IDProviders['https://srvcafe.ifms.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.esg.br/idp/shibboleth
$IDProviders['https://cafe.esg.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.pucsp.br/idp/shibboleth
$IDProviders['https://idp.pucsp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idpcafe.usp.br/idp/shibboleth
$IDProviders['https://idpcafe.usp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://rodio.ifnmg.edu.br/idp/shibboleth
$IDProviders['https://rodio.ifnmg.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idpcafe.ufscar.br/idp/shibboleth
$IDProviders['https://idpcafe.ufscar.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.uepg.br/idp/shibboleth
$IDProviders['https://idp.uepg.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://suiri.ifsuldeminas.edu.br/idp/shibboleth
$IDProviders['https://suiri.ifsuldeminas.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ufrn.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.ufrn.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.impa.br/idp/shibboleth
$IDProviders['https://shibboleth.impa.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.unifesp.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.unifesp.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idpcafe.ipen.br/idp/shibboleth
$IDProviders['https://idpcafe.ipen.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://federacao.hcpa.edu.br/idp/shibboleth
$IDProviders['https://federacao.hcpa.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.dmz.inpe.br/idp/shibboleth
$IDProviders['https://idp.dmz.inpe.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://dourado2.ufs.br/idp/shibboleth
$IDProviders['https://dourado2.ufs.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://www.unochapeco.edu.br/idp/shibboleth
$IDProviders['https://www.unochapeco.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.uema.br/idp/shibboleth
$IDProviders['https://idp.uema.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibbolethserver.unirio.br/idp/shibboleth
$IDProviders['https://shibbolethserver.unirio.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ufvjm.edu.br/saml2/idp/metadata.php
$IDProviders['https://cafe.ufvjm.edu.br/saml2/idp/metadata.php'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufopa.edu.br/idp/shibboleth
$IDProviders['https://idp.ufopa.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.uel.br/idp/shibboleth
$IDProviders['https://idp.uel.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://netsr-cafe02.unioeste.br/idp/shibboleth
$IDProviders['https://netsr-cafe02.unioeste.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://pan.unifei.edu.br/idp/shibboleth
$IDProviders['https://pan.unifei.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.furg.br/idp/shibboleth
$IDProviders['https://cafe.furg.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://federacao.ifpi.edu.br/idp/shibboleth
$IDProviders['https://federacao.ifpi.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://tamboril.ufop.br/idp/shibboleth
$IDProviders['https://tamboril.ufop.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://rnp-cafe.ifs.edu.br/idp/shibboleth
$IDProviders['https://rnp-cafe.ifs.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.iec.pa.gov.br/idp/shibboleth
$IDProviders['https://cafe.iec.pa.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.unila.edu.br/idp/shibboleth
$IDProviders['https://cafe.unila.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.puc-campinas.edu.br/idp/shibboleth
$IDProviders['https://idp.puc-campinas.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufpi.br/idp/shibboleth
$IDProviders['https://idp.ufpi.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shib.unifap.br/idp/shibboleth
$IDProviders['https://shib.unifap.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://sso.uft.edu.br/idp/shibboleth
$IDProviders['https://sso.uft.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://federacao2.uvanet.br/idp/shibboleth
$IDProviders['https://federacao2.uvanet.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.ufal.br/idp/shibboleth
$IDProviders['https://cafe.ufal.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.unilab.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.unilab.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.unisc.br/idp/shibboleth
$IDProviders['https://cafe.unisc.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://lrjidp01.cprm.gov.br/idp/shibboleth
$IDProviders['https://lrjidp01.cprm.gov.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.utfpr.edu.br/idp/shibboleth
$IDProviders['https://idp.utfpr.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.feevale.br/idp/shibboleth
$IDProviders['https://shibboleth.feevale.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.uftm.edu.br/idp/shibboleth
$IDProviders['https://idp.uftm.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufpb.br/idp/shibboleth
$IDProviders['https://idp.ufpb.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.rnp.br/idp/shibboleth
$IDProviders['https://idp.rnp.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.unoesc.edu.br/idp/shibboleth
$IDProviders['https://idp.unoesc.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://slm00-shibboleth.slmandic.edu.br/idp/shibboleth
$IDProviders['https://slm00-shibboleth.slmandic.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ifsc.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.ifsc.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.unir.br/idp/shibboleth
$IDProviders['https://idp.unir.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://jatoba.ufma.br/idp/shibboleth
$IDProviders['https://jatoba.ufma.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.uea.edu.br/idp/shibboleth
$IDProviders['https://cafe.uea.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://segovia.ifrn.edu.br/idp/shibboleth
$IDProviders['https://segovia.ifrn.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.unisinos.br/idp/shibboleth
$IDProviders['https://shibboleth.unisinos.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufgd.edu.br/idp/shibboleth
$IDProviders['https://idp.ufgd.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.mackenzie.br/idp/shibboleth
$IDProviders['https://cafe.mackenzie.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth3.ufms.br/idp/shibboleth
$IDProviders['https://shibboleth3.ufms.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.dti.ufv.br/idp/shibboleth
$IDProviders['https://cafe.dti.ufv.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://idp.ufpr.br/idp/shibboleth
$IDProviders['https://idp.ufpr.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe-idp.uern.br/idp/shibboleth
$IDProviders['https://cafe-idp.uern.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe.sti.uff.br/idp/shibboleth
$IDProviders['https://cafe.sti.uff.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ifac.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.ifac.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://srvcafe.ifma.edu.br/idp/shibboleth
$IDProviders['https://srvcafe.ifma.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://vm-cafe.feesc.org.br/idp/shibboleth
$IDProviders['https://vm-cafe.feesc.org.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://cafe2.ufes.br/idp/shibboleth
$IDProviders['https://cafe2.ufes.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');
//entityID: https://shibboleth.ifto.edu.br/idp/shibboleth
$IDProviders['https://shibboleth.ifto.edu.br/idp/shibboleth'] = array( 'Type' => 'http://cafe.rnp.br');

$IDProviders['http://www.canarie.ca'] = array ( 'Type' => 'category', 'Name' => 'Canadian Access Federation');
//entityID: https://idp.camosun.ca/idp/shibboleth
$IDProviders['https://idp.camosun.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.identity.uoguelph.ca/idp/shibboleth
$IDProviders['https://idp.identity.uoguelph.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.usask.ca/idp/shibboleth
$IDProviders['https://idp.usask.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.unb.ca/idp/shibboleth
$IDProviders['https://idp.unb.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.utorauth.utoronto.ca/shibboleth
$IDProviders['https://idp.utorauth.utoronto.ca/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.uvic.ca/idp/shibboleth
$IDProviders['https://idp.uvic.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://caf-fsso.smu.ca/idp/shibboleth
$IDProviders['https://caf-fsso.smu.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.uwaterloo.ca/idp/shibboleth
$IDProviders['https://idp.uwaterloo.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shibboleth.mcgill.ca/idp/shibboleth
$IDProviders['https://shibboleth.mcgill.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.teluq.ca/idp/shibboleth
$IDProviders['https://idp.teluq.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.cybera.ca/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.cybera.ca/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shib.svc.ulaval.ca/idp/shibboleth
$IDProviders['https://shib.svc.ulaval.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shibboleth.umontreal.ca/idp/shibboleth
$IDProviders['https://shibboleth.umontreal.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.uleth.ca/idp/shibboleth
$IDProviders['https://idp.uleth.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shibboleth.usherbrooke.ca/idp/shibboleth
$IDProviders['https://shibboleth.usherbrooke.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.uregina.ca/idp/shibboleth
$IDProviders['https://idp.uregina.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.canarie.ca/idp/shibboleth
$IDProviders['https://idp.canarie.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://login.queensu.ca/idp/shibboleth
$IDProviders['https://login.queensu.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://authentication.ubc.ca
$IDProviders['https://authentication.ubc.ca'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.upei.ca/idp/shibboleth
$IDProviders['https://idp.upei.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shib.yorku.ca/idp/shibboleth
$IDProviders['https://shib.yorku.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.uqam.ca/idp/shibboleth
$IDProviders['https://idp.uqam.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.wlu.ca/idp/shibboleth
$IDProviders['https://idp.wlu.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shibidp.uwo.ca/idp/shibboleth
$IDProviders['https://shibidp.uwo.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.umoncton.ca/idp/shibboleth
$IDProviders['https://idp.umoncton.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shibboleth2.polymtl.ca/idp/shibboleth
$IDProviders['https://shibboleth2.polymtl.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: http://login.sheridanc.on.ca
$IDProviders['http://login.sheridanc.on.ca'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://utility.acorn-ns.ca/idp/shibboleth
$IDProviders['https://utility.acorn-ns.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shibboleth.ucalgary.ca/idp/shibboleth
$IDProviders['https://shibboleth.ucalgary.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.uottawa.ca/idp/shibboleth
$IDProviders['https://idp.uottawa.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://uwinid.uwindsor.ca/idp/shibboleth
$IDProviders['https://uwinid.uwindsor.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.uqtr.ca/idp/shibboleth
$IDProviders['https://idp.uqtr.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://shib.trentu.ca/idp/shibboleth
$IDProviders['https://shib.trentu.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.stu.ca/idp/shibboleth
$IDProviders['https://idp.stu.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.ccs.ryerson.ca/idp/shibboleth
$IDProviders['https://idp.ccs.ryerson.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://login.ualberta.ca/saml2/idp/metadata.php
$IDProviders['https://login.ualberta.ca/saml2/idp/metadata.php'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.tru.ca/idp/shibboleth
$IDProviders['https://idp.tru.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://identity.concordia.ab.ca/idp/shibboleth
$IDProviders['https://identity.concordia.ab.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://cas.portal.umanitoba.ca:9444/idp/shibboleth
$IDProviders['https://cas.portal.umanitoba.ca:9444/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://authenticate.royalroads.ca/idp/shibboleth
$IDProviders['https://authenticate.royalroads.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.mta.ca/idp/shibboleth
$IDProviders['https://idp.mta.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.sfu.ca/entity
$IDProviders['https://idp.sfu.ca/entity'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.mcft.ca/idp/shibboleth
$IDProviders['https://idp.mcft.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.hollandcollege.com/idp/shibboleth
$IDProviders['https://idp.hollandcollege.com/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://login.fanshawec.ca/idp/shibboleth
$IDProviders['https://login.fanshawec.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.computecanada.ca/idp/shibboleth
$IDProviders['https://idp.computecanada.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://sso.mcmaster.ca/idp/shibboleth
$IDProviders['https://sso.mcmaster.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.lakeheadu.ca/idp/shibboleth
$IDProviders['https://idp.lakeheadu.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://idp.niagaracollege.ca/idp/shibboleth
$IDProviders['https://idp.niagaracollege.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: https://login.ocadu.ca/idp/shibboleth
$IDProviders['https://login.ocadu.ca/idp/shibboleth'] = array( 'Type' => 'http://www.canarie.ca');
//entityID: http://adfs.lacitec.on.ca/adfs/services/trust
$IDProviders['http://adfs.lacitec.on.ca/adfs/services/trust'] = array( 'Type' => 'http://www.canarie.ca');

$IDProviders['http://laife.lanet.lv/'] = array ( 'Type' => 'category', 'Name' => 'LAIFE');
//entityID: https://lu-idp.lu.lv
$IDProviders['https://lu-idp.lu.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://lumii-idp.lanet.lv
$IDProviders['https://lumii-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://du-idp.lanet.lv
$IDProviders['https://du-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://idp.llu.lv/idp/shibboleth
$IDProviders['https://idp.llu.lv/idp/shibboleth'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://id2.rtu.lv:443/openam
$IDProviders['https://id2.rtu.lv:443/openam'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://id.lndb.lv
$IDProviders['https://id.lndb.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://liepu-idp.lanet.lv
$IDProviders['https://liepu-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://lanet-idp.lanet.lv
$IDProviders['https://lanet-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://lma-idp.lanet.lv
$IDProviders['https://lma-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://lmuza-idp.lanet.lv
$IDProviders['https://lmuza-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://ra-idp.lanet.lv
$IDProviders['https://ra-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://skmms-idp.lanet.lv
$IDProviders['https://skmms-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://rmk-idp.lanet.lv
$IDProviders['https://rmk-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://lka-idp.lanet.lv
$IDProviders['https://lka-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://sse-idp.lanet.lv
$IDProviders['https://sse-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://rja-idp.lanet.lv
$IDProviders['https://rja-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://va-idp.lanet.lv
$IDProviders['https://va-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');
//entityID: https://vea-idp.lanet.lv
$IDProviders['https://vea-idp.lanet.lv'] = array( 'Type' => 'http://laife.lanet.lv/');

$IDProviders['https://www.wayf.dk'] = array ( 'Type' => 'category', 'Name' => 'WAYF');
//entityID: https://birk.wayf.dk/birk.php/wayf.kb.dk/stafflogin
$IDProviders['https://birk.wayf.dk/birk.php/wayf.kb.dk/stafflogin'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.hi.is/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.hi.is/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.ruc.dk/idp
$IDProviders['https://birk.wayf.dk/birk.php/wayf.ruc.dk/idp'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/orphanage.wayf.dk
$IDProviders['https://birk.wayf.dk/birk.php/orphanage.wayf.dk'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/sso.ucl.dk/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/sso.ucl.dk/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.aau.dk
$IDProviders['https://birk.wayf.dk/birk.php/wayf.aau.dk'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.viauc.dk/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.ucc.dk/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.ucc.dk/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/sso.sdu.dk/wayf
$IDProviders['https://birk.wayf.dk/birk.php/sso.sdu.dk/wayf'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.itu.dk/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.itu.dk/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip
$IDProviders['https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/aip/saml2/idp/metadata.php?unit=aip'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg
$IDProviders['https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/gg/saml2/idp/metadata.php?unit=gg'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg
$IDProviders['https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/mg/saml2/idp/metadata.php?unit=mg'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska
$IDProviders['https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/sska/saml2/idp/metadata.php?unit=sska'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss
$IDProviders['https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/sss/saml2/idp/metadata.php?unit=sss'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its
$IDProviders['https://birk.wayf.dk/birk.php/wayf.supportcenter.dk/its/saml2/idp/metadata.php?unit=its'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.ibc.dk/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.rungsted-gym.dk/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.rungsted-gym.dk/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/sso.ucsj.dk:443/idp
$IDProviders['https://birk.wayf.dk/birk.php/sso.ucsj.dk:443/idp'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayfa.efif.dk/zbc/module.php/saml/sp
$IDProviders['https://birk.wayf.dk/birk.php/wayfa.efif.dk/zbc/module.php/saml/sp'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayfa.efif.dk/fg/module.php/saml/sp
$IDProviders['https://birk.wayf.dk/birk.php/wayfa.efif.dk/fg/module.php/saml/sp'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/cas.cbs.dk/saml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/cas.cbs.dk/saml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/federation.ku.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/federation.ku.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayfa.efif.dk/vor/module.php/saml/sp
$IDProviders['https://birk.wayf.dk/birk.php/wayfa.efif.dk/vor/module.php/saml/sp'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/saml1.dmjx.dk/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/saml1.dmjx.dk/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/saml.pharmakon.dk/adfs/services/trust
$IDProviders['https://birk.wayf.dk/birk.php/saml.pharmakon.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.ait.dtu.dk/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.ait.dtu.dk/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.frhavn-gym.dk/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.frhavn-gym.dk/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/sso.sde.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/sso.sde.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/sso.hrs.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/sso.hrs.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.au.dk
$IDProviders['https://birk.wayf.dk/birk.php/wayf.au.dk'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayfa.efif.dk/kn/module.php/saml/sp
$IDProviders['https://birk.wayf.dk/birk.php/wayfa.efif.dk/kn/module.php/saml/sp'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/saml.sso.eucnord.net/
$IDProviders['http://birk.wayf.dk/birk.php/saml.sso.eucnord.net/'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayfa.efif.dk/hss/module.php/saml/sp
$IDProviders['https://birk.wayf.dk/birk.php/wayfa.efif.dk/hss/module.php/saml/sp'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayfeadania.itcn.dk/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayfeadania.itcn.dk/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/idp.umit.dk
$IDProviders['https://birk.wayf.dk/birk.php/idp.umit.dk'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/sso.basyd.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/sso.basyd.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/sts.statsbiblioteket.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/sts.statsbiblioteket.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/sso.eamv.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/sso.eamv.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.aams.dk/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.aams.dk/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/wayf.regionsjaelland.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/wayf.regionsjaelland.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/fs.dskd.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/fs.dskd.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/idp.fms.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/idp.fms.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/adfs.smk.dk/adfs/services/trust
$IDProviders['https://birk.wayf.dk/birk.php/adfs.smk.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/auth.msk.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/auth.msk.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/drcmr.dk:667/simplesaml/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/drcmr.dk:667/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/fs.edu.simac.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/fs.edu.simac.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/fg.ucsyd.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/fg.ucsyd.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/fs2.efif.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/fs2.efif.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/sts.kadk.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/sts.kadk.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/adfs.musikkons.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/adfs.musikkons.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/eaa-fs.efif.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/eaa-fs.efif.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/fs.easj.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/fs.easj.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/sso.easv.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/sso.easv.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/adfs.eal.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/adfs.eal.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/fs.ucn.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/fs.ucn.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/wayf.dsl.dk/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/wayf.dsl.dk/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/login.phmetropol.dk/adfs/services/trust
$IDProviders['https://birk.wayf.dk/birk.php/login.phmetropol.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/auth.fak.dk/saml2/idp/metadata.php
$IDProviders['https://birk.wayf.dk/birk.php/auth.fak.dk/saml2/idp/metadata.php'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: https://birk.wayf.dk/birk.php/sts.pha.dk/adfs/services/trust
$IDProviders['https://birk.wayf.dk/birk.php/sts.pha.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');
//entityID: http://birk.wayf.dk/birk.php/adfs.kea.dk/adfs/services/trust
$IDProviders['http://birk.wayf.dk/birk.php/adfs.kea.dk/adfs/services/trust'] = array( 'Type' => 'https://www.wayf.dk');

$IDProviders['https://federation.renater.fr/'] = array ( 'Type' => 'category', 'Name' => 'Fédération Éducation-Recherche');
//entityID: https://access-check.edugain.org/simplesaml/saml2/idp/metadata.php
$IDProviders['https://access-check.edugain.org/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://aishib.agropolis.fr/idp/shibboleth
$IDProviders['https://aishib.agropolis.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ambre.vetagro-sup.fr/idp/shibboleth
$IDProviders['https://ambre.vetagro-sup.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://antimoine.insa-strasbourg.fr/idp/shibboleth
$IDProviders['https://antimoine.insa-strasbourg.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://atlas.sciencespo-lille.eu/idp/shibboleth
$IDProviders['https://atlas.sciencespo-lille.eu/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.agrosupdijon.fr/idp/shibboleth
$IDProviders['https://auth.agrosupdijon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.centrale-marseille.fr/idp/shibboleth
$IDProviders['https://auth.centrale-marseille.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.chimie-paristech.fr/idp/saml2/metadata
$IDProviders['https://auth.chimie-paristech.fr/idp/saml2/metadata'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.crous-caen.fr/idp/shibboleth
$IDProviders['https://auth.crous-caen.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.crous-clermont.fr/idp/shibboleth
$IDProviders['https://auth.crous-clermont.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.crous-dijon.fr/idp/shibboleth
$IDProviders['https://auth.crous-dijon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.crous-lyon.fr/idp/shibboleth
$IDProviders['https://auth.crous-lyon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.crous-nice.fr/idp/shibboleth
$IDProviders['https://auth.crous-nice.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.crous-poitiers.fr/idp/shibboleth
$IDProviders['https://auth.crous-poitiers.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.crous-rennes.fr/idp/shibboleth
$IDProviders['https://auth.crous-rennes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.crous-strasbourg.fr/idp/shibboleth
$IDProviders['https://auth.crous-strasbourg.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.ensam.eu/idp/shibboleth
$IDProviders['https://auth.ensam.eu/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.entpe.fr/idp/shibboleth
$IDProviders['https://auth.entpe.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.u-pec.fr/idp/shibboleth
$IDProviders['https://auth.u-pec.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://auth.univ-paris-diderot.fr/idp/shibboleth
$IDProviders['https://auth.univ-paris-diderot.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://authentification.prive.ineris.fr/nidp/saml2/metadata
$IDProviders['https://authentification.prive.ineris.fr/nidp/saml2/metadata'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://cas.ac-martinique.fr/idp/shibboleth
$IDProviders['https://cas.ac-martinique.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://cas.crous-lyon.fr/idp/shibboleth
$IDProviders['https://cas.crous-lyon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://cas.educagri.fr/idp/shibboleth
$IDProviders['https://cas.educagri.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://cas.st-cyr.terre.defense.gouv.fr/idp/shibboleth
$IDProviders['https://cas.st-cyr.terre.defense.gouv.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://cas.uco.fr/idp/shibboleth
$IDProviders['https://cas.uco.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://cas.universite-lyon.fr/idp
$IDProviders['https://cas.universite-lyon.fr/idp'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://cassiopee.ac-nice.fr/idp/shibboleth
$IDProviders['https://cassiopee.ac-nice.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ciboulette.abes.fr/idp/shibboleth
$IDProviders['https://ciboulette.abes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ciboulette.onisep.fr/idp/shibboleth
$IDProviders['https://ciboulette.onisep.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://e-idp-prod.extra.cea.fr/idp/shibboleth
$IDProviders['https://e-idp-prod.extra.cea.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://eliot.isae.fr/idp/shibboleth
$IDProviders['https://eliot.isae.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://fedcnam.cnam.fr/idp/shibboleth
$IDProviders['https://fedcnam.cnam.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://fede.supelec.fr/idp/shibboleth
$IDProviders['https://fede.supelec.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation-identite.univ-paris13.fr/idp/shibboleth
$IDProviders['https://federation-identite.univ-paris13.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.ac-strasbourg.fr/idp/shibboleth
$IDProviders['https://federation.ac-strasbourg.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.agrocampus-ouest.fr/idp/shibboleth
$IDProviders['https://federation.agrocampus-ouest.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.bretagne.iufm.fr/idp/shibboleth
$IDProviders['https://federation.bretagne.iufm.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.esiee.fr/idp/shibboleth
$IDProviders['https://federation.esiee.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.ined.fr/idp/shibboleth
$IDProviders['https://federation.ined.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.sciences-po.fr/idp/shibboleth
$IDProviders['https://federation.sciences-po.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.u-pem.fr/idp/shibboleth
$IDProviders['https://federation.u-pem.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.umontpellier.fr/idp/shibboleth
$IDProviders['https://federation.umontpellier.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.unimes.fr/idp/shibboleth
$IDProviders['https://federation.unimes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.univ-perp.fr/idp/shibboleth
$IDProviders['https://federation.univ-perp.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.upf.pf/idp/shibboleth
$IDProviders['https://federation.upf.pf/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation.utbm.fr/idp/shibboleth
$IDProviders['https://federation.utbm.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation2.univ-perp.fr/idp/shibboleth
$IDProviders['https://federation2.univ-perp.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federation3.univ-brest.fr/idp/shibboleth
$IDProviders['https://federation3.univ-brest.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://federationrenater.univ-montp2.fr/idp/shibboleth
$IDProviders['https://federationrenater.univ-montp2.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://id.auf.org/idp/saml2/metadata
$IDProviders['https://id.auf.org/idp/saml2/metadata'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://id.ucly.fr/idp/shibboleth
$IDProviders['https://id.ucly.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ident-shib.ensc-rennes.fr/idp/shibboleth
$IDProviders['https://ident-shib.ensc-rennes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ident-shib.sciencespo-rennes.fr/idp/shibboleth
$IDProviders['https://ident-shib.sciencespo-rennes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ident-shib.u-bretagneloire.fr/idp/shibboleth
$IDProviders['https://ident-shib.u-bretagneloire.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ident.groupe-esa.fr/idp/shibboleth
$IDProviders['https://ident.groupe-esa.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://identification.univ-toulouse.fr
$IDProviders['https://identification.univ-toulouse.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://identite.ensta-bretagne.fr/idp/shibboleth
$IDProviders['https://identite.ensta-bretagne.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://identites.ec-lyon.fr/idp/shibboleth
$IDProviders['https://identites.ec-lyon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://identites.enim.fr/idp/
$IDProviders['https://identites.enim.fr/idp/'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://identites.ensea.fr/idp/shibboleth
$IDProviders['https://identites.ensea.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://identities.univ-jfc.fr/idp/prod
$IDProviders['https://identities.univ-jfc.fr/idp/prod'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-campus-condorcet.renater.fr/idp/shibboleth
$IDProviders['https://idp-campus-condorcet.renater.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-couperin.renater.fr/idp/shibboleth
$IDProviders['https://idp-couperin.renater.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-etu.crous-grenoble.fr/idp/shibboleth
$IDProviders['https://idp-etu.crous-grenoble.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-heb.u-bordeaux.fr/idp_cuea/shibboleth
$IDProviders['https://idp-heb.u-bordeaux.fr/idp_cuea/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-hosting.renater.fr/idp/shibboleth
$IDProviders['https://idp-hosting.renater.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-ng.univ-st-etienne.fr/idp/shibboleth
$IDProviders['https://idp-ng.univ-st-etienne.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-renater.pulsalys.fr/idp/shibboleth
$IDProviders['https://idp-renater.pulsalys.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-test.crous-reims.fr/idp/shibboleth
$IDProviders['https://idp-test.crous-reims.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp-ubx.u-bordeaux.fr/idp/shibboleth
$IDProviders['https://idp-ubx.u-bordeaux.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.bnu.fr/idp/shibboleth
$IDProviders['https://idp.bnu.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.centralelille.fr/idp/shibboleth
$IDProviders['https://idp.centralelille.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.cirad.fr/idp/shibboleth
$IDProviders['https://idp.cirad.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.college-de-france.fr/idp/shibboleth
$IDProviders['https://idp.college-de-france.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.cpe.fr/idp/shibboleth
$IDProviders['https://idp.cpe.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.criann.fr/saml2/idp/metadata.php
$IDProviders['https://idp.criann.fr/saml2/idp/metadata.php'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crihan.fr/saml2/idp/metadata.php
$IDProviders['https://idp.crihan.fr/saml2/idp/metadata.php'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-antillesguyane.fr/idp/shibboleth
$IDProviders['https://idp.crous-antillesguyane.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-bordeaux.fr/idp/shibboleth
$IDProviders['https://idp.crous-bordeaux.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-caen.fr/idp/shibboleth
$IDProviders['https://idp.crous-caen.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-creteil.fr/idp/shibboleth
$IDProviders['https://idp.crous-creteil.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-grenoble.fr/idp/shibboleth
$IDProviders['https://idp.crous-grenoble.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-lille.fr/idp/shibboleth
$IDProviders['https://idp.crous-lille.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-nancy-metz.fr/idp/shibboleth
$IDProviders['https://idp.crous-nancy-metz.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-nantes.fr/idp/shibboleth
$IDProviders['https://idp.crous-nantes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-orleans-tours.fr/idp/shibboleth
$IDProviders['https://idp.crous-orleans-tours.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-paris.fr/idp/shibboleth
$IDProviders['https://idp.crous-paris.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-poitiers.fr/idp/shibboleth
$IDProviders['https://idp.crous-poitiers.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-reunion.fr/idp/shibboleth
$IDProviders['https://idp.crous-reunion.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.crous-strasbourg.fr/idp/shibboleth
$IDProviders['https://idp.crous-strasbourg.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.cue-lillenorddefrance.fr/shibboleth
$IDProviders['https://idp.cue-lillenorddefrance.fr/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.curie.fr/idp/saml2/metadata
$IDProviders['https://idp.curie.fr/idp/saml2/metadata'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ec-lille.fr/idp/shibboleth
$IDProviders['https://idp.ec-lille.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ecam.fr/idp/shibboleth
$IDProviders['https://idp.ecam.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ecole-navale.fr/idp/shibboleth
$IDProviders['https://idp.ecole-navale.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ehesp.fr/idp/shibboleth
$IDProviders['https://idp.ehesp.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ehess.fr/idp/shibboleth
$IDProviders['https://idp.ehess.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.enac.fr/idp/shibboleth
$IDProviders['https://idp.enac.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.enib.fr/idp/shibboleth
$IDProviders['https://idp.enib.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.enit.fr/idp/shibboleth
$IDProviders['https://idp.enit.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.enitab.fr/idp/shibboleth
$IDProviders['https://idp.enitab.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ens-lyon.fr/idp/shibboleth
$IDProviders['https://idp.ens-lyon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ens-paris-saclay.fr/idp/shibboleth
$IDProviders['https://idp.ens-paris-saclay.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ens-rennes.fr/idp/shibboleth
$IDProviders['https://idp.ens-rennes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ens.fr/idp/idp
$IDProviders['https://idp.ens.fr/idp/idp'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ens2m.fr/idp/shibboleth
$IDProviders['https://idp.ens2m.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ensait.fr/idp/shibboleth
$IDProviders['https://idp.ensait.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.enscm.fr/idp/shibboleth
$IDProviders['https://idp.enscm.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ensma.fr/idp/shibboleth
$IDProviders['https://idp.ensma.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.enssib.fr/idp/shibboleth
$IDProviders['https://idp.enssib.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ent.dauphine.fr/idp/shibboleth
$IDProviders['https://idp.ent.dauphine.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.esigelec.fr/idp/shibboleth
$IDProviders['https://idp.esigelec.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.etrs.terre.defense.gouv.fr/idp/shibboleth
$IDProviders['https://idp.etrs.terre.defense.gouv.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.eurecom.fr/idp/shibboleth
$IDProviders['https://idp.eurecom.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.hesam.eu/idp/shibboleth
$IDProviders['https://idp.hesam.eu/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ifremer.fr/idp/shibboleth
$IDProviders['https://idp.ifremer.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ill.fr/idp/shibboleth
$IDProviders['https://idp.ill.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.inalco.fr/idp/shibboleth
$IDProviders['https://idp.inalco.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.inha.fr/idp/shibboleth
$IDProviders['https://idp.inha.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.inp-toulouse.fr/idp/shibboleth
$IDProviders['https://idp.inp-toulouse.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.inra.fr/idp/shibboleth
$IDProviders['https://idp.inra.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.inserm-transfert.fr/idp/shibboleth
$IDProviders['https://idp.inserm-transfert.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.inserm.fr/idp/shibboleth
$IDProviders['https://idp.inserm.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.inshea.fr/idp/shibboleth
$IDProviders['https://idp.inshea.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.ipb.fr/idp/shibboleth
$IDProviders['https://idp.ipb.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.irstea.fr/idp/shibboleth
$IDProviders['https://idp.irstea.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.mines-paristech.fr/idp/shibboleth
$IDProviders['https://idp.mines-paristech.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.normandie-univ.fr/idp/shibboleth
$IDProviders['https://idp.normandie-univ.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.oniris-nantes.fr/idp/shibboleth
$IDProviders['https://idp.oniris-nantes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.parisdescartes.fr/idp/shibboleth
$IDProviders['https://idp.parisdescartes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.pasteur.fr/idp/shibboleth
$IDProviders['https://idp.pasteur.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.polytechnique.fr/idp/shibboleth
$IDProviders['https://idp.polytechnique.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.renater.fr/idp/shibboleth
$IDProviders['https://idp.renater.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.rouen.archi.fr/idp/shibboleth
$IDProviders['https://idp.rouen.archi.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.sciencespo-lyon.fr/idp/shibboleth
$IDProviders['https://idp.sciencespo-lyon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.sciencespobordeaux.fr/idp/shibboleth
$IDProviders['https://idp.sciencespobordeaux.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.shom.fr/idp/shibboleth
$IDProviders['https://idp.shom.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.sigma-clermont.fr/idp/shibboleth
$IDProviders['https://idp.sigma-clermont.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.sorbonne-universites.fr/idp/shibboleth
$IDProviders['https://idp.sorbonne-universites.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.strasbourg.archi.fr/idp/shibboleth
$IDProviders['https://idp.strasbourg.archi.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.supagro.fr/idp
$IDProviders['https://idp.supagro.fr/idp'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.telecom-bretagne.eu/idp/shibboleth
$IDProviders['https://idp.telecom-bretagne.eu/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.telecom-paristech.fr/idp/shibboleth
$IDProviders['https://idp.telecom-paristech.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.test.irstea.fr/idp/shibboleth
$IDProviders['https://idp.test.irstea.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.u-bordeaux-montaigne.fr/idp/shibboleth
$IDProviders['https://idp.u-bordeaux-montaigne.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.u-cergy.fr/idp/shibboleth
$IDProviders['https://idp.u-cergy.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.u-clermont1.fr/idp/shibboleth
$IDProviders['https://idp.u-clermont1.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.u-paris2.fr/idp/shibboleth
$IDProviders['https://idp.u-paris2.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.u-pem.fr/idp/shibboleth
$IDProviders['https://idp.u-pem.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.u-picardie.fr/idp/shibboleth
$IDProviders['https://idp.u-picardie.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.u-psud.fr/idp
$IDProviders['https://idp.u-psud.fr/idp'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.uca.fr/idp/shibboleth
$IDProviders['https://idp.uca.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.uha.fr/idp/shibboleth
$IDProviders['https://idp.uha.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.unistra.fr/idp/shibboleth
$IDProviders['https://idp.unistra.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-amu.fr/idp/shibboleth
$IDProviders['https://idp.univ-amu.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-antilles.fr/idp/shibboleth
$IDProviders['https://idp.univ-antilles.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-artois.fr/idp/shibboleth
$IDProviders['https://idp.univ-artois.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-avignon.fr/idp/shibboleth
$IDProviders['https://idp.univ-avignon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-bpclermont.fr/idp/shibboleth
$IDProviders['https://idp.univ-bpclermont.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-fcomte.fr/idp/shibboleth
$IDProviders['https://idp.univ-fcomte.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-guyane.fr/idp/shibboleth
$IDProviders['https://idp.univ-guyane.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-lehavre.fr/idp/shibboleth
$IDProviders['https://idp.univ-lehavre.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-lille.fr/idp/shibboleth
$IDProviders['https://idp.univ-lille.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-lille3.fr/idp
$IDProviders['https://idp.univ-lille3.fr/idp'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-lorraine.fr/idp/shibboleth
$IDProviders['https://idp.univ-lorraine.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-lyon2.fr/idp/shibboleth
$IDProviders['https://idp.univ-lyon2.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-lyon3.fr/idp/shibboleth
$IDProviders['https://idp.univ-lyon3.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-orleans.fr/idp/shibboleth
$IDProviders['https://idp.univ-orleans.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-paris3.fr/idp/shibboleth
$IDProviders['https://idp.univ-paris3.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-paris4.fr/idp/shibboleth
$IDProviders['https://idp.univ-paris4.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-paris8.fr/idp/shibboleth
$IDProviders['https://idp.univ-paris8.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-pau.fr/idp/shibboleth
$IDProviders['https://idp.univ-pau.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-psl.fr/idp/saml2/metadata
$IDProviders['https://idp.univ-psl.fr/idp/saml2/metadata'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-tln.fr/idp/shibboleth
$IDProviders['https://idp.univ-tln.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.univ-tours.fr/idp/shibboleth
$IDProviders['https://idp.univ-tours.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.upmc.fr/idp/shibboleth
$IDProviders['https://idp.upmc.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp.vet-alfort.fr/idp/shibboleth
$IDProviders['https://idp.vet-alfort.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp1.agroparistech.fr/shibboleth
$IDProviders['https://idp1.agroparistech.fr/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp1.crous-toulouse.fr/idp/shibboleth
$IDProviders['https://idp1.crous-toulouse.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp1.ens-cachan.fr/idp/shibboleth
$IDProviders['https://idp1.ens-cachan.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp1.inria.fr/idp/shibboleth
$IDProviders['https://idp1.inria.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp2.amue.fr/idp/shibboleth
$IDProviders['https://idp2.amue.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp2.crous-aix-marseille.fr/idp/shibboleth
$IDProviders['https://idp2.crous-aix-marseille.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp2.crous-besancon.fr/idp/shibboleth
$IDProviders['https://idp2.crous-besancon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp2.crous-limoges.fr/idp/shibboleth
$IDProviders['https://idp2.crous-limoges.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp2.crous-toulouse.fr/idp/shibboleth
$IDProviders['https://idp2.crous-toulouse.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp2.ensai.fr/idp/shibboleth
$IDProviders['https://idp2.ensai.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp2.mines-douai.fr/idp/shibboleth
$IDProviders['https://idp2.mines-douai.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.cereq.fr/idp/shibboleth
$IDProviders['https://idp3.cereq.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.cyceron.fr/idp/shibboleth
$IDProviders['https://idp3.cyceron.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.hec.fr/idp/shibboleth
$IDProviders['https://idp3.hec.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.insa-rennes.fr/idp/shibboleth
$IDProviders['https://idp3.insa-rennes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.marnelavallee.archi.fr/idp/shibboleth
$IDProviders['https://idp3.marnelavallee.archi.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.mnhn.fr/idp/shibboleth
$IDProviders['https://idp3.mnhn.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.unicaen.fr/idp/shibboleth
$IDProviders['https://idp3.unicaen.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.univ-lorraine.fr/idp/shibboleth
$IDProviders['https://idp3.univ-lorraine.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idp3.ut-capitole.fr/idp/shibboleth
$IDProviders['https://idp3.ut-capitole.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idpr.tem-tsp.eu/idp/shibboleth
$IDProviders['https://idpr.tem-tsp.eu/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idpr3.tem-tsp.eu/idp/shibboleth
$IDProviders['https://idpr3.tem-tsp.eu/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idptl.telecom-lille.fr/idp/shibboleth
$IDProviders['https://idptl.telecom-lille.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idpv3-personnel.crous-versailles.fr/idp/shibboleth
$IDProviders['https://idpv3-personnel.crous-versailles.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idpv3.crous-versailles.fr/idp/shibboleth
$IDProviders['https://idpv3.crous-versailles.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://idpv3.univ-amu.fr/idp/shibboleth
$IDProviders['https://idpv3.univ-amu.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ir-lan-fid.images-et-reseaux.com/idp/shibboleth
$IDProviders['https://ir-lan-fid.images-et-reseaux.com/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://janus.bordeaux.archi.fr/idp/shibboleth
$IDProviders['https://janus.bordeaux.archi.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://janus.cnrs.fr/idp
$IDProviders['https://janus.cnrs.fr/idp'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://login.insa-lyon.fr/idp/shibboleth
$IDProviders['https://login.insa-lyon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://multipass.imt-lille-douai.fr/idp/shibboleth
$IDProviders['https://multipass.imt-lille-douai.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://nte.gemtech.fr/idp/shibboleth
$IDProviders['https://nte.gemtech.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://pidtl.telecom-lille.fr/idp/shibboleth
$IDProviders['https://pidtl.telecom-lille.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://rigal.enpc.fr/idp/shibboleth
$IDProviders['https://rigal.enpc.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://ruhnu.univ-tlse2.fr/idp/shibboleth
$IDProviders['https://ruhnu.univ-tlse2.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://sesame.ifsttar.fr/idp/shibboleth
$IDProviders['https://sesame.ifsttar.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shib-pp.unicaen.fr/idp/shibboleth
$IDProviders['https://shib-pp.unicaen.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shib.mines-albi.fr/idp/shibboleth
$IDProviders['https://shib.mines-albi.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shib.parisnanterre.fr/idp/shibboleth
$IDProviders['https://shib.parisnanterre.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shib.univ-reims.fr/idp/shibboleth
$IDProviders['https://shib.univ-reims.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shib1.univ-nc.nc/idp/shibboleth
$IDProviders['https://shib1.univ-nc.nc/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shib3.mines-ales.fr/idp/shibboleth
$IDProviders['https://shib3.mines-ales.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibb-prod.eseo.fr/idp/shibboleth
$IDProviders['https://shibb-prod.eseo.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibbo-test.ec-lyon.fr/idp/shibboleth
$IDProviders['https://shibbo-test.ec-lyon.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibbo.ec-nantes.fr/idp/shibboleth
$IDProviders['https://shibbo.ec-nantes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibbo.emse.fr/idp/shibboleth
$IDProviders['https://shibbo.emse.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibbo3.enise.fr/idp/shibboleth
$IDProviders['https://shibbo3.enise.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.ac-limoges.fr/idp/shibboleth
$IDProviders['https://shibboleth.ac-limoges.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.csi.uvsq.fr/idp/shibboleth
$IDProviders['https://shibboleth.csi.uvsq.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.enc.sorbonne.fr/idp/shibboleth
$IDProviders['https://shibboleth.enc.sorbonne.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.ensi-bourges.fr/idp/shibboleth
$IDProviders['https://shibboleth.ensi-bourges.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.ensicaen.fr/idp/shibboleth
$IDProviders['https://shibboleth.ensicaen.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.ensiie.fr/idp/shibboleth
$IDProviders['https://shibboleth.ensiie.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.ensta.fr/idp/shibboleth
$IDProviders['https://shibboleth.ensta.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.grenoble-inp.fr/idp/shibboleth
$IDProviders['https://shibboleth.grenoble-inp.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.grenoble.archi.fr/idp
$IDProviders['https://shibboleth.grenoble.archi.fr/idp'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.insa-cvl.fr/idp/shibboleth
$IDProviders['https://shibboleth.insa-cvl.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.insa-rouen.fr/idp/shibboleth
$IDProviders['https://shibboleth.insa-rouen.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.obspm.fr/idp/shibboleth
$IDProviders['https://shibboleth.obspm.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.reseau-canope.fr/idp/shibboleth
$IDProviders['https://shibboleth.reseau-canope.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.sciencespo-grenoble.fr/idp/shibboleth
$IDProviders['https://shibboleth.sciencespo-grenoble.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.u-bourgogne.fr/idp/shibboleth
$IDProviders['https://shibboleth.u-bourgogne.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.univ-corse.fr/idp/shibboleth
$IDProviders['https://shibboleth.univ-corse.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.univ-grenoble-alpes.fr/idp/shibboleth
$IDProviders['https://shibboleth.univ-grenoble-alpes.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.univ-paris-est.fr/idp/shibboleth
$IDProviders['https://shibboleth.univ-paris-est.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.univ-savoie.fr/idp/shibboleth
$IDProviders['https://shibboleth.univ-savoie.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.univ-toulouse.fr/idp/shibboleth
$IDProviders['https://shibboleth.univ-toulouse.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth.ups-tlse.fr/idp/shibboleth
$IDProviders['https://shibboleth.ups-tlse.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth3.envt.fr/idp/shibboleth
$IDProviders['https://shibboleth3.envt.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth3.obspm.fr/idp/shibboleth
$IDProviders['https://shibboleth3.obspm.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibboleth3.utt.fr/idp/shibboleth
$IDProviders['https://shibboleth3.utt.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibbolethv3.ac-limoges.fr/idp/shibboleth
$IDProviders['https://shibbolethv3.ac-limoges.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibbolethv3.univ-evry.fr/idp/shibboleth
$IDProviders['https://shibbolethv3.univ-evry.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibbov3.ephe.fr/idp/shibboleth
$IDProviders['https://shibbov3.ephe.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://shibidp.oca.eu/idp/shibboleth
$IDProviders['https://shibidp.oca.eu/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://si.crous-rouen.fr/idp/shibboleth
$IDProviders['https://si.crous-rouen.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://srv-cr-idp.crdp-aquitaine.fr/idp/shibboleth
$IDProviders['https://srv-cr-idp.crdp-aquitaine.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://srv-fii.insa-toulouse.fr/idp/shibboleth
$IDProviders['https://srv-fii.insa-toulouse.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://sso.cnes.fr
$IDProviders['https://sso.cnes.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://sso.institutoptique.fr/idp/shibboleth
$IDProviders['https://sso.institutoptique.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://sso.ird.fr/idp/shibboleth
$IDProviders['https://sso.ird.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://sts.windows.net/a1bce70e-1f36-4e8c-b4f3-48980a5f78ee/
$IDProviders['https://sts.windows.net/a1bce70e-1f36-4e8c-b4f3-48980a5f78ee/'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://tamana.msh-paris.fr/idp/shibboleth
$IDProviders['https://tamana.msh-paris.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://vip.espci.fr/saml2/idp/metadata.php
$IDProviders['https://vip.espci.fr/saml2/idp/metadata.php'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://vm-idp.paris-sorbonne.fr/idp/shibboleth
$IDProviders['https://vm-idp.paris-sorbonne.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://vmfetid.iamm.fr/idp/shibboleth
$IDProviders['https://vmfetid.iamm.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://websso.esrf.fr/auth/realms/ESRF
$IDProviders['https://websso.esrf.fr/auth/realms/ESRF'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: https://www.collecte.evaluation-contractualisation.fr/idp/shibboleth
$IDProviders['https://www.collecte.evaluation-contractualisation.fr/idp/shibboleth'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:uhb.fr
$IDProviders['urn:mace:cru.fr:federation:uhb.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:unice.fr
$IDProviders['urn:mace:cru.fr:federation:unice.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:unilim.fr
$IDProviders['urn:mace:cru.fr:federation:unilim.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-angers.fr
$IDProviders['urn:mace:cru.fr:federation:univ-angers.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-lemans.fr
$IDProviders['urn:mace:cru.fr:federation:univ-lemans.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-lille1.fr
$IDProviders['urn:mace:cru.fr:federation:univ-lille1.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-littoral.fr
$IDProviders['urn:mace:cru.fr:federation:univ-littoral.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-lyon1.fr
$IDProviders['urn:mace:cru.fr:federation:univ-lyon1.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-montp1.fr
$IDProviders['urn:mace:cru.fr:federation:univ-montp1.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-montp3.fr
$IDProviders['urn:mace:cru.fr:federation:univ-montp3.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-nantes.fr
$IDProviders['urn:mace:cru.fr:federation:univ-nantes.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-paris1.fr
$IDProviders['urn:mace:cru.fr:federation:univ-paris1.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-poitiers.fr
$IDProviders['urn:mace:cru.fr:federation:univ-poitiers.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-rennes1.fr
$IDProviders['urn:mace:cru.fr:federation:univ-rennes1.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-reunion.fr
$IDProviders['urn:mace:cru.fr:federation:univ-reunion.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-rouen.fr
$IDProviders['urn:mace:cru.fr:federation:univ-rouen.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-st-etienne.fr
$IDProviders['urn:mace:cru.fr:federation:univ-st-etienne.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-ubs.fr
$IDProviders['urn:mace:cru.fr:federation:univ-ubs.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:univ-valenciennes.fr
$IDProviders['urn:mace:cru.fr:federation:univ-valenciennes.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:utc.fr
$IDProviders['urn:mace:cru.fr:federation:utc.fr'] = array( 'Type' => 'https://federation.renater.fr/');
//entityID: urn:mace:cru.fr:federation:utt.fr
$IDProviders['urn:mace:cru.fr:federation:utt.fr'] = array( 'Type' => 'https://federation.renater.fr/');

$IDProviders['http://ukfederation.org.uk'] = array ( 'Type' => 'category', 'Name' => 'UK federation');
//entityID: https://idp2.iay.org.uk/idp/shibboleth
$IDProviders['https://idp2.iay.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: urn:mace:ac.uk:sdss.ac.uk:provider:identity:dur.ac.uk
$IDProviders['urn:mace:ac.uk:sdss.ac.uk:provider:identity:dur.ac.uk'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cardiff.ac.uk/shibboleth
$IDProviders['https://idp.cardiff.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://registry.shibboleth.ox.ac.uk/idp
$IDProviders['https://registry.shibboleth.ox.ac.uk/idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.kidderminster.ac.uk/idp/shibboleth
$IDProviders['https://idp.kidderminster.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://krad.cityplym.ac.uk/shibboleth
$IDProviders['https://krad.cityplym.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://lse.ac.uk/idp
$IDProviders['https://lse.ac.uk/idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.imperial.ac.uk/shibboleth
$IDProviders['https://shibboleth.imperial.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.raven.cam.ac.uk/shibboleth
$IDProviders['https://shib.raven.cam.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.wmin.ac.uk/entity
$IDProviders['https://idp.wmin.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shidp.glam.ac.uk/shibboleth
$IDProviders['https://shidp.glam.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp0.abertay.ac.uk/shibboleth
$IDProviders['https://idp0.abertay.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp01.stfc.ac.uk/shibboleth
$IDProviders['https://idp01.stfc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.aber.ac.uk/shibboleth
$IDProviders['https://shibboleth.aber.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sussex.ac.uk/shibboleth
$IDProviders['https://idp.sussex.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.kingston.ac.uk/shibboleth
$IDProviders['https://idp.kingston.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.gla.ac.uk/shibboleth
$IDProviders['https://idp.gla.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bath.ac.uk/shibboleth
$IDProviders['https://idp.bath.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.york.ac.uk/shibboleth
$IDProviders['https://shib.york.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.shibboleth.stir.ac.uk/shibboleth
$IDProviders['https://idp.shibboleth.stir.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.shef.ac.uk/shibboleth
$IDProviders['https://idp.shef.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sid.kent.ac.uk/shibboleth
$IDProviders['https://sid.kent.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bangor.ac.uk/shibboleth
$IDProviders['https://idp.bangor.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.calderdale.ac.uk/shibboleth
$IDProviders['https://idp.calderdale.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.manchester.ac.uk/shibboleth
$IDProviders['https://shib.manchester.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.we-learn.com/shibboleth
$IDProviders['https://idp.we-learn.com/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.dundee.ac.uk/shibboleth
$IDProviders['https://idp.dundee.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-dev.cardiff.ac.uk/idp/shibboleth
$IDProviders['https://idp-dev.cardiff.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.shu.ac.uk/shibboleth
$IDProviders['https://idp.shu.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.st-andrews.ac.uk/shibboleth
$IDProviders['https://idp.st-andrews.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.ioe.ac.uk/shibboleth
$IDProviders['https://idp1.ioe.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://netlogin.strath.ac.uk/shibboleth
$IDProviders['https://netlogin.strath.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.data-archive.ac.uk/shibboleth-idp
$IDProviders['https://shib.data-archive.ac.uk/shibboleth-idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://srvshibboleth.asfc.ac.uk/shibboleth
$IDProviders['https://srvshibboleth.asfc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.southport-college.ac.uk/shibboleth
$IDProviders['https://idp.southport-college.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bham.ac.uk/shibboleth
$IDProviders['https://idp.bham.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibidp.wqeic.ac.uk/shibboleth
$IDProviders['https://shibidp.wqeic.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cityofbristol.ac.uk/shibboleth
$IDProviders['https://idp.cityofbristol.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibidp.wnc.ac.uk/idp/shibboleth
$IDProviders['https://shibidp.wnc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibsles.brunel.ac.uk/idp/shibboleth
$IDProviders['https://shibsles.brunel.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ed.ac.uk/shibboleth
$IDProviders['https://idp.ed.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.richuish.ac.uk/idp/shibboleth
$IDProviders['https://idp.richuish.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.colegsirgar.ac.uk/shibboleth
$IDProviders['https://idp.colegsirgar.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.londonmet.ac.uk/entity
$IDProviders['https://idp.londonmet.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-dev.sussex.ac.uk/idp/shibboleth
$IDProviders['https://idp-dev.sussex.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib1.hw.ac.uk/shibboleth
$IDProviders['https://shib1.hw.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib1.napier.ac.uk/entity
$IDProviders['https://shib1.napier.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.beds.ac.uk/entity
$IDProviders['https://idp.beds.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.macclesfield.ac.uk/shibboleth
$IDProviders['https://idp.macclesfield.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://ukamf.belfastmet.ac.uk/shibboleth
$IDProviders['https://ukamf.belfastmet.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.lsbu.ac.uk/shibboleth
$IDProviders['https://shibboleth.lsbu.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nottingham.ac.uk/shibboleth
$IDProviders['https://idp.nottingham.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.aquinas.ac.uk/shibboleth
$IDProviders['https://idp.aquinas.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://elibrary.exeter.ac.uk/idp/shibboleth
$IDProviders['https://elibrary.exeter.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.mdx.ac.uk/shibboleth
$IDProviders['https://idp.mdx.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.soas.ac.uk/entity
$IDProviders['https://idp.soas.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lshtm.ac.uk/shibboleth
$IDProviders['https://idp.lshtm.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.blackpool.ac.uk/shibboleth
$IDProviders['https://shib.blackpool.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.kmc.ac.uk/shibboleth
$IDProviders['https://idp.kmc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bromley.ac.uk/shibboleth
$IDProviders['https://idp.bromley.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.newman.ac.uk/metadata
$IDProviders['https://idp.newman.ac.uk/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://zed.bcu.ac.uk/entity
$IDProviders['https://zed.bcu.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cdd.ac.uk/shibboleth
$IDProviders['https://idp.cdd.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.mbro.ac.uk/metadata
$IDProviders['https://idp.mbro.ac.uk/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.uwe.ac.uk/entity
$IDProviders['https://idp.uwe.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.craven-college.ac.uk/shibboleth
$IDProviders['https://idp.craven-college.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.gateshead.ac.uk/shibboleth
$IDProviders['https://idp.gateshead.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.croydon.ac.uk/shibboleth
$IDProviders['https://idp.croydon.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.woking.ac.uk/shibboleth
$IDProviders['https://idp.woking.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.havant.ac.uk/shibboleth
$IDProviders['https://idp.havant.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sunderland.ac.uk/shibboleth
$IDProviders['https://idp.sunderland.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://www.uws.ac.uk/shibboleth
$IDProviders['https://www.uws.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.niesr.ac.uk/shibboleth
$IDProviders['https://idp.niesr.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.blackburn.ac.uk/entity
$IDProviders['https://idp.blackburn.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.brighton.ac.uk/shibboleth
$IDProviders['https://idp-test.brighton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.brighton.ac.uk/shibboleth
$IDProviders['https://idp.brighton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.bradfordcollege.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.bradfordcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.weymouth.ac.uk/idp/shibboleth
$IDProviders['https://idp.weymouth.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://www.kedst.ac.uk/shibboleth
$IDProviders['https://www.kedst.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.mmu.ac.uk/shibboleth
$IDProviders['https://idp.mmu.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.le.ac.uk/shibboleth
$IDProviders['https://idp.le.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stockton.ac.uk/shibboleth
$IDProviders['https://idp.stockton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ljmu.ac.uk/shibboleth
$IDProviders['https://idp.ljmu.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.guildford.ac.uk/shibboleth
$IDProviders['https://idp.guildford.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://cardshibidp.cardonald.ac.uk/shibboleth
$IDProviders['https://cardshibidp.cardonald.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.camre.ac.uk/shibboleth
$IDProviders['https://idp.camre.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.hereford.ac.uk/shibboleth
$IDProviders['https://idp.hereford.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.colchester.ac.uk/shibboleth
$IDProviders['https://idp.colchester.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.southdevon.ac.uk/shibboleth
$IDProviders['https://idp.southdevon.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.motherwell.co.uk/shibboleth
$IDProviders['https://idp.motherwell.co.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://pp.webauth.soton.ac.uk/shibboleth
$IDProviders['https://pp.webauth.soton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.boltoncc.ac.uk/shibboleth
$IDProviders['https://idp.boltoncc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://federation.citylit.ac.uk/shibboleth
$IDProviders['https://federation.citylit.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.london.ac.uk/shibboleth
$IDProviders['https://idp.london.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bedford.ac.uk/shibboleth
$IDProviders['https://idp.bedford.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.johnruskin.ac.uk/shibboleth
$IDProviders['https://idp.johnruskin.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.leedsmet.ac.uk/shibboleth
$IDProviders['https://idp.leedsmet.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.morleycollege.ac.uk/shibboleth
$IDProviders['https://idp.morleycollege.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.mrc.ac.uk/shibboleth
$IDProviders['https://idp.mrc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.burycollege.ac.uk/shibboleth
$IDProviders['https://shibboleth.burycollege.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sso.loucoll.ac.uk/shibboleth
$IDProviders['https://sso.loucoll.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.george-monoux.ac.uk/shibboleth
$IDProviders['https://idp.george-monoux.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.canterbury.ac.uk/shibboleth
$IDProviders['https://idp.canterbury.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.chester.ac.uk/shibboleth
$IDProviders['https://idp.chester.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.warwick.ac.uk/idp/shibboleth
$IDProviders['https://idp.warwick.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://webauth.soton.ac.uk/shibboleth
$IDProviders['https://webauth.soton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.hartpury.ac.uk/shibboleth
$IDProviders['https://shibboleth.hartpury.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbk.ac.uk/openathens
$IDProviders['https://idp.bbk.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stephensoncoll.ac.uk/shibboleth
$IDProviders['https://idp.stephensoncoll.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.writtle.ac.uk/shibboleth
$IDProviders['https://idp.writtle.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.llandrillo.ac.uk/shibboleth
$IDProviders['https://idp.llandrillo.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lboro.ac.uk/shibboleth
$IDProviders['https://idp.lboro.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://www.justis.com/shibboleth
$IDProviders['https://www.justis.com/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://athens.londonexternal.ac.uk/OpenAthens
$IDProviders['https://athens.londonexternal.ac.uk/OpenAthens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ucreative.ac.uk/shibboleth
$IDProviders['https://idp.ucreative.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rncm.ac.uk/shibboleth
$IDProviders['https://idp.rncm.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.herts.ac.uk/shibboleth
$IDProviders['https://idp.herts.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.leedstrinity.ac.uk/shibboleth
$IDProviders['https://idp.leedstrinity.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ccn.ac.uk/shibboleth
$IDProviders['https://idp.ccn.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bsms.ac.uk/shibboleth
$IDProviders['https://idp.bsms.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.bsms.ac.uk/shibboleth
$IDProviders['https://idp-test.bsms.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cornwall.ac.uk/shibboleth-idp
$IDProviders['https://idp.cornwall.ac.uk/shibboleth-idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stcharles.ac.uk/shibboleth
$IDProviders['https://idp.stcharles.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.colchsfc.ac.uk/shibboleth
$IDProviders['https://idp.colchsfc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.roehampton.ac.uk/shibboleth
$IDProviders['https://idp.roehampton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.havering-sfc.ac.uk/shibboleth
$IDProviders['https://idp.havering-sfc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.hud.ac.uk/shibboleth
$IDProviders['https://idp.hud.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.open.ac.uk/openathens
$IDProviders['https://idp.open.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.coulsdon.ac.uk/shibboleth
$IDProviders['https://idp.coulsdon.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.glos.ac.uk/entity
$IDProviders['https://idp1.glos.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.wlc.ac.uk/shibboleth
$IDProviders['https://idp.wlc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbsrc.ac.uk/shibboleth
$IDProviders['https://idp.bbsrc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ccad.ac.uk/shibboleth
$IDProviders['https://idp.ccad.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.newdur.ac.uk/shibboleth
$IDProviders['https://idp.newdur.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ulster.ac.uk/shibboleth
$IDProviders['https://idp.ulster.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nuca.ac.uk/shibboleth
$IDProviders['https://idp.nuca.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.winchester.ac.uk/shibboleth
$IDProviders['https://idp.winchester.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.uel.ac.uk/shibboleth
$IDProviders['https://idp.uel.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.barnsley.ac.uk/openathens
$IDProviders['https://idp.barnsley.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bruford.ac.uk/shibboleth
$IDProviders['https://idp.bruford.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ruskin.ac.uk/shibboleth
$IDProviders['https://idp.ruskin.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.holycross.ac.uk/shibboleth
$IDProviders['https://idp.holycross.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.gcc.ac.uk/shibboleth
$IDProviders['https://idp.gcc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rave.ac.uk/openathens
$IDProviders['https://idp.rave.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.longleypark.ac.uk/shibboleth
$IDProviders['https://idp.longleypark.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.yorkcollege.ac.uk/entity
$IDProviders['https://idp.yorkcollege.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ram.ac.uk/shibboleth
$IDProviders['https://idp.ram.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibbserver.preston.ac.uk/shibboleth
$IDProviders['https://shibbserver.preston.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbsrc.ac.uk/babraham
$IDProviders['https://idp.bbsrc.ac.uk/babraham'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbsrc.ac.uk/scri
$IDProviders['https://idp.bbsrc.ac.uk/scri'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbsrc.ac.uk/moredun
$IDProviders['https://idp.bbsrc.ac.uk/moredun'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbsrc.ac.uk/pirbright
$IDProviders['https://idp.bbsrc.ac.uk/pirbright'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbsrc.ac.uk/swindon
$IDProviders['https://idp.bbsrc.ac.uk/swindon'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbsrc.ac.uk/rothamsted
$IDProviders['https://idp.bbsrc.ac.uk/rothamsted'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bbsrc.ac.uk/macaulay
$IDProviders['https://idp.bbsrc.ac.uk/macaulay'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lutonsfc.ac.uk/openathens
$IDProviders['https://idp.lutonsfc.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.grantham.ac.uk/shibboleth
$IDProviders['https://idp.grantham.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bucks.ac.uk/entity
$IDProviders['https://idp.bucks.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.highbury.ac.uk/entity
$IDProviders['https://idp.highbury.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.dudleycol.ac.uk/openathens
$IDProviders['https://idp.dudleycol.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.qmc.ac.uk/shibboleth
$IDProviders['https://idp.qmc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ocvc.ac.uk/shibboleth
$IDProviders['https://idp.ocvc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sparsholt.ac.uk/shibboleth
$IDProviders['https://idp.sparsholt.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.havering-college.ac.uk/openathens
$IDProviders['https://idp.havering-college.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.waltham.ac.uk/openathens
$IDProviders['https://idp.waltham.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.newbold.ac.uk/shibboleth
$IDProviders['https://idp.newbold.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rcplondon.ac.uk/openathens
$IDProviders['https://idp.rcplondon.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bishopg.ac.uk/shibboleth
$IDProviders['https://idp.bishopg.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.solihullsfc.ac.uk/shibboleth
$IDProviders['https://idp.solihullsfc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://lc-idp.lincolncollege.ac.uk/shibboleth
$IDProviders['https://lc-idp.lincolncollege.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nhc.ac.uk/shibboleth
$IDProviders['https://idp.nhc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.midkent.ac.uk/shibboleth
$IDProviders['https://shibboleth.midkent.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nwrc.ac.uk/shibboleth
$IDProviders['https://idp.nwrc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.west-thames.ac.uk/metadata
$IDProviders['https://idp.west-thames.ac.uk/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.swc.ac.uk/shibboleth
$IDProviders['https://idp.swc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibby.wmc.ac.uk/shibboleth-idp
$IDProviders['https://shibby.wmc.ac.uk/shibboleth-idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.oaklands.ac.uk/shibboleth
$IDProviders['https://idp.oaklands.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.citysun.ac.uk/shibboleth
$IDProviders['https://idp.citysun.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth2.rwcmd.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth2.rwcmd.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.fareham.ac.uk/shibboleth
$IDProviders['https://idp.fareham.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.hca.ac.uk/shibboleth
$IDProviders['https://idp.hca.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bhasvic.ac.uk/entity
$IDProviders['https://idp.bhasvic.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sids.somerset.ac.uk/metadata
$IDProviders['https://sids.somerset.ac.uk/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.qeliz.ac.uk/shibboleth
$IDProviders['https://idp.qeliz.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://lcmshibboleth.lcm.ac.uk/shibboleth
$IDProviders['https://lcmshibboleth.lcm.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpglyndwr.ac.uk/shibboleth
$IDProviders['https://idpglyndwr.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.grimsby.ac.uk/shibboleth
$IDProviders['https://idp.grimsby.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.serc.ac.uk/shibboleth
$IDProviders['https://shibboleth.serc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.dunstable.ac.uk/openathens
$IDProviders['https://idp.dunstable.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bishopb-college.ac.uk/shibboleth
$IDProviders['https://idp.bishopb-college.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.palmers.ac.uk/shibboleth
$IDProviders['https://idp.palmers.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.hackney.ac.uk/shibboleth
$IDProviders['https://idp.hackney.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.enorf.ac.uk/shibboleth
$IDProviders['https://idp.enorf.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ucb.ac.uk/shibboleth
$IDProviders['https://idp.ucb.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.brookehouse.ac.uk/openathens
$IDProviders['https://idp.brookehouse.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.hughbaird.ac.uk/shibboleth
$IDProviders['https://idp.hughbaird.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.smu.ac.uk/openathens
$IDProviders['https://idp.smu.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.kirkleescollege.ac.uk/entity
$IDProviders['https://idp.kirkleescollege.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.accross.ac.uk/shibboleth
$IDProviders['https://idp.accross.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://ncidp.northamptoncollege.ac.uk/entity
$IDProviders['https://ncidp.northamptoncollege.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.strodes.ac.uk/shibboleth
$IDProviders['https://idp.strodes.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.tees.ac.uk/entity
$IDProviders['https://idp1.tees.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.yeovil.ac.uk/idp/shibboleth
$IDProviders['https://idp.yeovil.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://hermes.kendal.ac.uk/shibboleth
$IDProviders['https://hermes.kendal.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lcwc.ac.uk/shibboleth
$IDProviders['https://idp.lcwc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.courtauld.ac.uk/shibboleth
$IDProviders['https://idp.courtauld.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.hrc.ac.uk/idp
$IDProviders['https://shibboleth.hrc.ac.uk/idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lipa.ac.uk/shibboleth
$IDProviders['https://idp.lipa.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.chesterfield.ac.uk/shibboleth
$IDProviders['https://idp.chesterfield.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.leeds-art.ac.uk/openathens
$IDProviders['https://idp.leeds-art.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://rhc-fed.reaseheath.ac.uk/idp/shibboleth
$IDProviders['https://rhc-fed.reaseheath.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://gcidp.gloscol.ac.uk/shibboleth
$IDProviders['https://gcidp.gloscol.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.northern.ac.uk/shibboleth
$IDProviders['https://idp.northern.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://nbcol.ac.uk/openathens
$IDProviders['https://nbcol.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.centralsussex.ac.uk/shibboleth
$IDProviders['https://idp.centralsussex.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.exe-coll.ac.uk/openathens
$IDProviders['https://idp.exe-coll.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.west-lothian.ac.uk/shibboleth
$IDProviders['https://idp.west-lothian.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nescot.ac.uk/shibboleth
$IDProviders['https://idp.nescot.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.camsfc.ac.uk/shibboleth
$IDProviders['https://shibboleth.camsfc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.s-cheshire.ac.uk/shibboleth
$IDProviders['https://idp.s-cheshire.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bilborough.ac.uk/openathens
$IDProviders['https://idp.bilborough.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rcm.ac.uk/shibboleth
$IDProviders['https://idp.rcm.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bridgend.ac.uk/shibboleth
$IDProviders['https://idp.bridgend.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.southend.ac.uk/shibboleth
$IDProviders['https://idp.southend.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stanmore.ac.uk/shibboleth
$IDProviders['https://idp.stanmore.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cssd.ac.uk/shibboleth
$IDProviders['https://idp.cssd.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.brock.ac.uk/entity
$IDProviders['https://idp.brock.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.south-thames.ac.uk/entity
$IDProviders['https://idp.south-thames.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://comet.esher.ac.uk/shibboleth
$IDProviders['https://comet.esher.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.falmouth.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.falmouth.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://wakshib1.wakefield.ac.uk/shibboleth
$IDProviders['https://wakshib1.wakefield.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.northland.ac.uk/shibboleth
$IDProviders['https://idp.northland.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.dumgal.ac.uk/openathens
$IDProviders['https://idp.dumgal.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.src.ac.uk/shibboleth
$IDProviders['https://idp.src.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cumbria.ac.uk/idp/shibboleth
$IDProviders['https://idp.cumbria.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.psc.ac.uk/shibboleth
$IDProviders['https://idp.psc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.gyc.ac.uk/openathens
$IDProviders['https://idp.gyc.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.marjon.ac.uk/idp/shibboleth
$IDProviders['https://idp.marjon.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpcove.trafford.ac.uk/shibboleth
$IDProviders['https://idpcove.trafford.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://passport01.leeds.ac.uk/idp/shibboleth
$IDProviders['https://passport01.leeds.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ctksfc.ac.uk/shibboleth
$IDProviders['https://idp.ctksfc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.holborncollege.ac.uk/openathens
$IDProviders['https://idp.holborncollege.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.st-davids-coll.ac.uk/idp/shibboleth
$IDProviders['https://idp.st-davids-coll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nrc.ac.uk/shibboleth
$IDProviders['https://idp.nrc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.barkingcollege.ac.uk/shibbolethidp
$IDProviders['https://idp.barkingcollege.ac.uk/shibbolethidp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://gateway.ncl.ac.uk/idp/shibboleth
$IDProviders['https://gateway.ncl.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.smuc.ac.uk/idp/shibboleth
$IDProviders['https://idp1.smuc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://dmz-shib-dg-01.dmz.roehampton.ac.uk/idp/shibboleth
$IDProviders['https://dmz-shib-dg-01.dmz.roehampton.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.wnsc.ac.uk/idp/shibboleth
$IDProviders['https://idp.wnsc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://boleth.chi.ac.uk/idp/shibboleth
$IDProviders['https://boleth.chi.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth-idp.don.ac.uk/shibboleth
$IDProviders['https://shibboleth-idp.don.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ayrcoll.ac.uk/entity
$IDProviders['https://idp.ayrcoll.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.esrc.ac.uk/openathens
$IDProviders['https://idp.esrc.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rsceng.ac.uk/openathens
$IDProviders['https://idp.rsceng.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.warkscol.ac.uk/shibboleth
$IDProviders['https://idp.warkscol.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.wiltshire.ac.uk/idp/shibboleth
$IDProviders['https://idp.wiltshire.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib2.qmu.ac.uk/idp/shibboleth
$IDProviders['https://shib2.qmu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.northumbria.ac.uk/idp/shibboleth
$IDProviders['https://idptest.northumbria.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.gsmd.ac.uk/openathens
$IDProviders['https://idp.gsmd.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.burnley.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.burnley.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.solent.ac.uk/idp/shibboleth
$IDProviders['https://idp1.solent.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.edina.ac.uk/shibboleth
$IDProviders['https://idp.edina.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.wellcome.ac.uk/idp/shibboleth
$IDProviders['https://idp.wellcome.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibbsrv1.gsa.ac.uk/idp/shibboleth
$IDProviders['https://shibbsrv1.gsa.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.hartlepoolfe.ac.uk/openathens
$IDProviders['https://idp.hartlepoolfe.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibtest.ex.ac.uk/idp/shibboleth
$IDProviders['https://shibtest.ex.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.llgc.org.uk/idp/shibboleth
$IDProviders['https://idp.llgc.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp2.londonlibrary.co.uk/idp/shibboleth
$IDProviders['https://idp2.londonlibrary.co.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://wccidp.west-cheshire.ac.uk/shibboleth
$IDProviders['https://wccidp.west-cheshire.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cardinalnewman.ac.uk/idp/shibboleth
$IDProviders['https://idp.cardinalnewman.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bpc.ac.uk/idp/shibboleth
$IDProviders['https://idp.bpc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.leyton.ac.uk/shibboleth
$IDProviders['https://idp.leyton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nelson.ac.uk/openathens
$IDProviders['https://idp.nelson.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.goldsmiths.ac.uk/idp/shibboleth
$IDProviders['https://idp.goldsmiths.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.westherts.ac.uk/idp/shibboleth
$IDProviders['https://idp.westherts.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nulc.ac.uk/openathens
$IDProviders['https://idp.nulc.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.oldham.ac.uk/shibboleth
$IDProviders['https://shibboleth.oldham.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.parliament.uk/openaccess
$IDProviders['https://idp.parliament.uk/openaccess'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://dlib-schoolsidp.edina.ac.uk/idp/shibboleth
$IDProviders['https://dlib-schoolsidp.edina.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.plymouthart.ac.uk/shibboleth
$IDProviders['https://idp.plymouthart.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.derby-college.ac.uk/idp/shibboleth
$IDProviders['https://idp.derby-college.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://bathspa.ac.uk/oala/metadata
$IDProviders['https://bathspa.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stc.ac.uk/idp/shibboleth
$IDProviders['https://idp.stc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.natcen.ac.uk/openathens
$IDProviders['https://idp.natcen.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stratford.ac.uk/idp/shibboleth
$IDProviders['https://idp.stratford.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ifs.org.uk/openathens
$IDProviders['https://idp.ifs.org.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.moulton.ac.uk/idp/shibboleth
$IDProviders['https://idp.moulton.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibb.hull-college.ac.uk/idp/shibboleth
$IDProviders['https://shibb.hull-college.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://ukmyms01-zone02.smg-uk.com/idp/shibboleth
$IDProviders['https://ukmyms01-zone02.smg-uk.com/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.stamford.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.stamford.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib2idp.rgu.ac.uk/idp/shibboleth
$IDProviders['https://shib2idp.rgu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.statistics.gov.uk/openathens
$IDProviders['https://idp.statistics.gov.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.godalming.ac.uk/shibboleth
$IDProviders['https://idp.godalming.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.tavistockandportman.ac.uk/idp/shibboleth
$IDProviders['https://idp.tavistockandportman.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.knowsleycollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.knowsleycollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://school.c2kni.net/shibboleth
$IDProviders['https://school.c2kni.net/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cadcol.ac.uk/idp/shibboleth
$IDProviders['https://idp.cadcol.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://hefce-shib.hefce.ac.uk/idp/shibboleth
$IDProviders['https://hefce-shib.hefce.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nottingham.edu.my/idp/shibboleth
$IDProviders['https://idp.nottingham.edu.my/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.southstaffs.ac.uk/idp/shibboleth
$IDProviders['https://idp.southstaffs.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-preprod.cardiff.ac.uk/idp/shibboleth
$IDProviders['https://idp-preprod.cardiff.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib2idp.ntu.ac.uk/idp/shibboleth
$IDProviders['https://shib2idp.ntu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://testidp1.ntu.ac.uk/idp/shibboleth
$IDProviders['https://testidp1.ntu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib-test.raven.cam.ac.uk/shibboleth
$IDProviders['https://shib-test.raven.cam.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://access.lcb.ac.uk/idp/shibboleth
$IDProviders['https://access.lcb.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.hct.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.hct.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://dialect.liv-coll.ac.uk/idp/shibboleth
$IDProviders['https://dialect.liv-coll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.eastridingcollege.ac.uk/shibboleth
$IDProviders['https://idp.eastridingcollege.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib-idp.ucl.ac.uk/shibboleth
$IDProviders['https://shib-idp.ucl.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.col-westanglia.ac.uk/openathens
$IDProviders['https://idp.col-westanglia.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sandwell.ac.uk/idp/shibboleth
$IDProviders['https://idp.sandwell.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.shibboleth.qmul.ac.uk/idp/shibboleth
$IDProviders['https://idp.shibboleth.qmul.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.test.semantico.net/shibboleth2
$IDProviders['https://idp.test.semantico.net/shibboleth2'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lshtm.ac.uk/shibboleth-xfr
$IDProviders['https://idp.lshtm.ac.uk/shibboleth-xfr'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://login.northumbria.ac.uk/idp/shibboleth
$IDProviders['https://login.northumbria.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stokecoll.ac.uk/idp/shibboleth
$IDProviders['https://idp.stokecoll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.tower.ac.uk/openathens
$IDProviders['https://idp.tower.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: urn:mace:eduserv.org.uk:athens:provider:liv.ac.uk
$IDProviders['urn:mace:eduserv.org.uk:athens:provider:liv.ac.uk'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lmc.ac.uk/idp/shibboleth
$IDProviders['https://idp.lmc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://bolton.ac.uk/oala/metadata
$IDProviders['https://bolton.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.farnborough.ac.uk/shibboleth
$IDProviders['https://idp.farnborough.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://testidp.nottingham.ac.uk/shibboleth
$IDProviders['https://testidp.nottingham.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibidp.uclan.ac.uk/idp/shibboleth
$IDProviders['https://shibidp.uclan.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nottingham.edu.cn/idp/shibboleth
$IDProviders['https://idp.nottingham.edu.cn/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://ldp.esc.ac.uk/idp/shibboleth
$IDProviders['https://ldp.esc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibserv.abdn.ac.uk/shibboleth
$IDProviders['https://shibserv.abdn.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.anglia.ac.uk/openathens
$IDProviders['https://idp.anglia.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.coventry.ac.uk/idp
$IDProviders['https://idptest.coventry.ac.uk/idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.dur.ac.uk:444/idp/shibboleth
$IDProviders['https://shib.dur.ac.uk:444/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://kclidp.kcl.ac.uk/idp/shibboleth
$IDProviders['https://kclidp.kcl.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.le.ac.uk/idp/shibboleth
$IDProviders['https://idp.le.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://abcidp.askham-bryan.ac.uk/shibboleth
$IDProviders['https://abcidp.askham-bryan.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.ucs.ed.ac.uk/idp/shibboleth
$IDProviders['https://idp-test.ucs.ed.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://beta.shib.manchester.ac.uk/shibboleth
$IDProviders['https://beta.shib.manchester.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.strode-college.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.strode-college.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibidptest.york.ac.uk/shibboleth
$IDProviders['https://shibidptest.york.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bexley.ac.uk/shibboleth
$IDProviders['https://idp.bexley.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.newbury-college.ac.uk/idp/shibboleth
$IDProviders['https://shib.newbury-college.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.kingston-college.ac.uk/idp/shibboleth
$IDProviders['https://idp.kingston-college.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.osfc.ac.uk/idp/shibboleth
$IDProviders['https://idp.osfc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bournemouth.ac.uk/oala/metadata
$IDProviders['https://idp.bournemouth.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sso.kgv.ac.uk/idp/shibboleth
$IDProviders['https://sso.kgv.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.edgehill.ac.uk/shibboleth
$IDProviders['https://shibboleth.edgehill.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sso.bsfc.ac.uk/idp/shibboleth
$IDProviders['https://sso.bsfc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.ncl-coll.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.ncl-coll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.c2kqa.net/idp/shibboleth
$IDProviders['https://shibboleth.c2kqa.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: urn:mace:ac.uk:sdss.ac.uk:provider:identity:shibboleth-i.sgul.ac.uk
$IDProviders['urn:mace:ac.uk:sdss.ac.uk:provider:identity:shibboleth-i.sgul.ac.uk'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp02.stfc.ac.uk/shibboleth
$IDProviders['https://idp02.stfc.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sp2.kcc.ac.uk/idp/shibboleth
$IDProviders['https://sp2.kcc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.huddnewcoll.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.huddnewcoll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.southampton-city.ac.uk/idp/shibboleth
$IDProviders['https://idp.southampton-city.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.chichester.ac.uk/idp/shibboleth
$IDProviders['https://idp.chichester.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.cranfield.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.cranfield.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.gla.ac.uk/idp/shibboleth
$IDProviders['https://idptest.gla.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.londonmet.ac.uk/idp/shibboleth
$IDProviders['https://idp-test.londonmet.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp0.essex.ac.uk/shibboleth
$IDProviders['https://idp0.essex.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth-idp-test.webbased.co.uk/idp/shibboleth
$IDProviders['https://shibboleth-idp-test.webbased.co.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://qub.ac.uk/shibboleth
$IDProviders['https://qub.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://coventry.ac.uk/idp
$IDProviders['https://coventry.ac.uk/idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stokesfc.ac.uk/idp/shibboleth
$IDProviders['https://idp.stokesfc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://ncnidp2.ncn.ac.uk/idp/shibboleth
$IDProviders['https://ncnidp2.ncn.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibidp.tameside.ac.uk/idp/shibboleth
$IDProviders['https://shibidp.tameside.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oa-idp.wlv.ac.uk/oala/metadata
$IDProviders['https://oa-idp.wlv.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bris.ac.uk/shibboleth
$IDProviders['https://idp.bris.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.weston.ac.uk/idp/shibboleth
$IDProviders['https://idp.weston.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.mimas.ac.uk/idp/shibboleth
$IDProviders['https://idp.mimas.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibdev.shef.ac.uk/shibboleth
$IDProviders['https://shibdev.shef.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.stvincent.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.stvincent.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ocvc.ac.uk/entity
$IDProviders['https://idp.ocvc.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.warrington.ac.uk/idp/shibboleth
$IDProviders['https://idp.warrington.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://el-shib.redbridge-college.ac.uk/idp/shibboleth
$IDProviders['https://el-shib.redbridge-college.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.shibboleth.net/idp/shibboleth
$IDProviders['https://idp.shibboleth.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.hope.ac.uk/idp/shibboleth
$IDProviders['https://shib.hope.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://login.library.dmu.ac.uk/oala/metadata
$IDProviders['https://login.library.dmu.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://dev2.webauth.soton.ac.uk/shibboleth
$IDProviders['https://dev2.webauth.soton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib2.blackpool.ac.uk/idp/shibboleth
$IDProviders['https://shib2.blackpool.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.bolton-sfc.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.bolton-sfc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.selby.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.selby.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://login-test.st-andrews.ac.uk/idp/shibboleth
$IDProviders['https://login-test.st-andrews.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.warwick.ac.uk/idp/shibboleth
$IDProviders['https://idp-test.warwick.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.arts.ac.uk/entity
$IDProviders['https://idp.arts.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.shibboleth.ox.ac.uk/shibboleth-idp
$IDProviders['https://idp-test.shibboleth.ox.ac.uk/shibboleth-idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lboro.ac.uk/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.lboro.ac.uk/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://athensla.uwe.ac.uk/oala/metadata
$IDProviders['https://athensla.uwe.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oala.trinitylaban.ac.uk/oala/metadata
$IDProviders['https://oala.trinitylaban.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.farn-ct.ac.uk/idp/shibboleth
$IDProviders['https://idp.farn-ct.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lambeth.ac.uk/idp/shibboleth
$IDProviders['https://idp.lambeth.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.leedscitycollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.leedscitycollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sanger.ac.uk/idp/shibboleth
$IDProviders['https://idp.sanger.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.longroad.ac.uk/idp/shibboleth
$IDProviders['https://idp.longroad.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://eresources.city.ac.uk/oala/metadata
$IDProviders['https://eresources.city.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://edulidp01.hants.gov.uk/idp/shibboleth
$IDProviders['https://edulidp01.hants.gov.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://beaumontcollege.org/oala/metadata
$IDProviders['https://beaumontcollege.org/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibb.stockport.ac.uk/idp/shibboleth
$IDProviders['https://shibb.stockport.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://duck-dev.bournemouth.ac.uk/oala/metadata
$IDProviders['https://duck-dev.bournemouth.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.staffordcoll.ac.uk/shibboleth
$IDProviders['https://idp.staffordcoll.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth-idp.admin.furness.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth-idp.admin.furness.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://iss-openathensla-runtime.swan.ac.uk/oala/metadata
$IDProviders['https://iss-openathensla-runtime.swan.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.midchesh.ac.uk/idp/shibboleth
$IDProviders['https://idp.midchesh.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://openathens.keele.ac.uk/oala/metadata
$IDProviders['https://openathens.keele.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.overtsoftware.com/idp/shibboleth
$IDProviders['https://idp.overtsoftware.com/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.worc.ac.uk/oala/metadata
$IDProviders['https://idp.worc.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: http://idp.northampton.ac.uk/oala/metadata
$IDProviders['http://idp.northampton.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sussexdowns.ac.uk/idp/shibboleth
$IDProviders['https://idp.sussexdowns.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.merthyr.ac.uk/idp/shibboleth
$IDProviders['https://idp.merthyr.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: http://sso.sunderland.ac.uk/auth/metadata
$IDProviders['http://sso.sunderland.ac.uk/auth/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.hopwood.ac.uk/idp/shibboleth
$IDProviders['https://shib.hopwood.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib-dev-idp.ucl.ac.uk/shibboleth
$IDProviders['https://shib-dev-idp.ucl.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stbrn.ac.uk/idp/shibboleth
$IDProviders['https://idp.stbrn.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.westking.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.westking.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://bmcidp.brooksbymelton.ac.uk/idp/shibboleth
$IDProviders['https://bmcidp.brooksbymelton.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.uolia.london.ac.uk/shibboleth
$IDProviders['https://idp.uolia.london.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.rcs.ac.uk/shibboleth
$IDProviders['https://shib.rcs.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://harper-adams.ac.uk/oala/metadata
$IDProviders['https://harper-adams.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.gowercollegeswansea.ac.uk/idp/shibboleth
$IDProviders['https://idp.gowercollegeswansea.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://rcm.ac.uk/oala/metadata
$IDProviders['https://rcm.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.candi.ac.uk/idp/shibboleth
$IDProviders['https://idp.candi.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.mkcollege.ac.uk/openathens
$IDProviders['https://idp.mkcollege.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.barkingdagenhamcollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.barkingdagenhamcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib-uat-idp.ucl.ac.uk/shibboleth
$IDProviders['https://shib-uat-idp.ucl.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://ibook.conel.ac.uk/idp/shibboleth
$IDProviders['https://ibook.conel.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://www.login.dumgal.ac.uk/oala/metadata
$IDProviders['https://www.login.dumgal.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://athens.petroc.ac.uk/oala/metadata
$IDProviders['https://athens.petroc.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://brad.ac.uk/oala/metadata
$IDProviders['https://brad.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.aucb.ac.uk/oala/metadata
$IDProviders['https://idp.aucb.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stourbridge.ac.uk/idp/shibboleth
$IDProviders['https://idp.stourbridge.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://athensla-dev.uwe.ac.uk/oala/metadata
$IDProviders['https://athensla-dev.uwe.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lse.ac.uk/idp/shibboleth
$IDProviders['https://idp.lse.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.harrow.ac.uk/idp/shibboleth
$IDProviders['https://idp.harrow.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.shu.ac.uk/idp/shibboleth
$IDProviders['https://idp-test.shu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://hscshib1.qub.ac.uk/idp/shibboleth
$IDProviders['https://hscshib1.qub.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.aylesbury.ac.uk/idp/shibboleth
$IDProviders['https://shib.aylesbury.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.uxbridge.ac.uk/idp/shibboleth
$IDProviders['https://idp.uxbridge.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.swindon-college.ac.uk/idp/shibboleth
$IDProviders['https://idp.swindon-college.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://login.uea.ac.uk/entity
$IDProviders['https://login.uea.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.bca.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.bca.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.borderscollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.borderscollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oala-runtime.eastleigh.ac.uk/oala/metadata
$IDProviders['https://oala-runtime.eastleigh.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://nerckwshibba.nerc.ac.uk/idp/shibboleth
$IDProviders['https://nerckwshibba.nerc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp3.bucks.ac.uk/idp/shibboleth
$IDProviders['https://idp3.bucks.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.snc.ac.uk/idp/shibboleth
$IDProviders['https://idp.snc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ebi.ac.uk/idp/shibboleth
$IDProviders['https://idp.ebi.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oala.surrey.ac.uk/oala/metadata
$IDProviders['https://oala.surrey.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://testoala.surrey.ac.uk/oala/metadata
$IDProviders['https://testoala.surrey.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ceredigion.ac.uk/openathens
$IDProviders['https://idp.ceredigion.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oa-idp22.wlv.ac.uk/oala/metadata
$IDProviders['https://oa-idp22.wlv.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp4.halesowen.ac.uk/idp/shibboleth
$IDProviders['https://idp4.halesowen.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth2.liv.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth2.liv.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stephensoncoll.ac.uk/oala/metadata
$IDProviders['https://idp.stephensoncoll.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://openathensr.guildford.ac.uk/oala/metadata
$IDProviders['https://openathensr.guildford.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://openathens.aston.ac.uk/oala/metadata
$IDProviders['https://openathens.aston.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.bsdc.ac.uk/idp/shibboleth
$IDProviders['https://shib.bsdc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib1snc.suffolk.ac.uk/idp/shibboleth
$IDProviders['https://shib1snc.suffolk.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rac.ac.uk/oala/metadata
$IDProviders['https://idp.rac.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://fam.salford.ac.uk/oala/metadata
$IDProviders['https://fam.salford.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rca.ac.uk/oala/metadata
$IDProviders['https://idp.rca.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.rcn.org.uk/idp/shibboleth
$IDProviders['https://shibboleth.rcn.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rvc.ac.uk/oala/metadata
$IDProviders['https://idp.rvc.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.acs-schools.com/openathens
$IDProviders['https://idp.acs-schools.com/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://athens.gcc.ac.uk/oala/metadata
$IDProviders['https://athens.gcc.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sgscol.ac.uk/idp/shibboleth
$IDProviders['https://idp.sgscol.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://peterborough.ac.uk/oala/metadata
$IDProviders['https://peterborough.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.imperial.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.imperial.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.plumpton.ac.uk/openathens
$IDProviders['https://idp.plumpton.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://reading.ac.uk/oala/metadata
$IDProviders['https://reading.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://auth.buckingham.ac.uk/shibboleth
$IDProviders['https://auth.buckingham.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.pembrokeshire.ac.uk/idp/shibboleth
$IDProviders['https://idp.pembrokeshire.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oala.uws.ac.uk/oala/metadata
$IDProviders['https://oala.uws.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.evidenceinformedpractice.org/oa
$IDProviders['https://idp.evidenceinformedpractice.org/oa'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.barnetsouthgate.ac.uk/idp/shibboleth
$IDProviders['https://idp.barnetsouthgate.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://auth.aspirationtraining.com/idp/shibboleth
$IDProviders['https://auth.aspirationtraining.com/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bournville.ac.uk/idp/shibboleth
$IDProviders['https://idp.bournville.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-dev.bangor.ac.uk/shibboleth
$IDProviders['https://idp-dev.bangor.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.themanchestercollege.ac.uk/idp/shibboleth
$IDProviders['https://idp1.themanchestercollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nwkcollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.nwkcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lancs.ac.uk/idp/shibboleth
$IDProviders['https://idp.lancs.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.slcollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.slcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.richardtaunton.ac.uk/oala/metadata
$IDProviders['https://idp.richardtaunton.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: http://idp.rhul.ac.uk/oala
$IDProviders['http://idp.rhul.ac.uk/oala'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://qa.idp.uhi.ac.uk/idp/shibboleth
$IDProviders['https://qa.idp.uhi.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cnwl.ac.uk/idp/shibboleth
$IDProviders['https://idp.cnwl.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.treloar.org.uk/idp/shibboleth
$IDProviders['https://idp.treloar.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.uws.ac.uk/oala/metadata
$IDProviders['https://idp.uws.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.altoncollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.altoncollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://fedauth.london.edu/oala/metadata
$IDProviders['https://fedauth.london.edu/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://athens.regents.ac.uk/oala/metadata
$IDProviders['https://athens.regents.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboletht.lsbu.ac.uk/idp/shibboleth
$IDProviders['https://shibboletht.lsbu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cambridgeimaging.co.uk/entity
$IDProviders['https://idp.cambridgeimaging.co.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stmarysblackburn.ac.uk/idp/shibboleth
$IDProviders['https://idp.stmarysblackburn.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lincoln.ac.uk/oala/metadata
$IDProviders['https://idp.lincoln.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://afbi-shib.ads.qub.ac.uk/idp/shibboleth
$IDProviders['https://afbi-shib.ads.qub.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.edinburghcollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.edinburghcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://www.wmsf.ac.uk
$IDProviders['https://www.wmsf.ac.uk'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.tresham.ac.uk/idp/shibboleth
$IDProviders['https://idp.tresham.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.iamtest.ox.ac.uk/shibboleth
$IDProviders['https://idp.iamtest.ox.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.brookes.ac.uk/idp/shibboleth
$IDProviders['https://idp.brookes.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.dundee.ac.uk/idp/shibboleth
$IDProviders['https://idptest.dundee.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth-dev.derby.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth-dev.derby.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cced.cranfield.ac.uk/openathens
$IDProviders['https://idp.cced.cranfield.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shiblogin.hull.ac.uk/idp/shibboleth
$IDProviders['https://shiblogin.hull.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.citybathcoll.ac.uk/oala/metadata
$IDProviders['https://idp.citybathcoll.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.amersham.ac.uk/idp/shibboleth
$IDProviders['https://idp.amersham.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://federatedaccess.hrc.ac.uk/idp/shibboleth
$IDProviders['https://federatedaccess.hrc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nbi.ac.uk/idp/shibboleth
$IDProviders['https://idp.nbi.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://athensproxy.ids.ac.uk/oala/metadata
$IDProviders['https://athensproxy.ids.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.truro-penwith.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.truro-penwith.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.gre.ac.uk/oala/metadata
$IDProviders['https://idp.gre.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.brunel.ac.uk/entity
$IDProviders['https://idptest.brunel.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.cavc.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.cavc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sruc.ac.uk/idp/shibboleth
$IDProviders['https://idp.sruc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.hadlow.ac.uk/idp/shibboleth
$IDProviders['https://idp.hadlow.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://openathens.rave.ac.uk/oala/metadata
$IDProviders['https://openathens.rave.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://pleiades.lesoco.ac.uk/idp/shibboleth
$IDProviders['https://pleiades.lesoco.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nwhc.ac.uk/idp/shibboleth
$IDProviders['https://idp.nwhc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sa1.nimr.mrc.ac.uk/idp/shibboleth
$IDProviders['https://sa1.nimr.mrc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.derby.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.derby.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cwc.ac.uk/idp/shibboleth
$IDProviders['https://idp.cwc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sussexcoast.ac.uk/idp/shibboleth
$IDProviders['https://idp.sussexcoast.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.plymouth.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.plymouth.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://ukfederation.ecu.ac.uk/idp/shibboleth
$IDProviders['https://ukfederation.ecu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: http://stsr4l.who.int/adfs/services/trust
$IDProviders['http://stsr4l.who.int/adfs/services/trust'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpdev.bham.ac.uk/idp/shibboleth
$IDProviders['https://idpdev.bham.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://fam.carmel.ac.uk/idp/shibboleth
$IDProviders['https://fam.carmel.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.staffs.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.staffs.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibb-idp.cymoedd.ac.uk/idp/shibboleth
$IDProviders['https://shibb-idp.cymoedd.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.westcollegescotland.ac.uk/openathens
$IDProviders['https://idp.westcollegescotland.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.barnfield.ac.uk/idp/shibboleth
$IDProviders['https://idp.barnfield.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.lancs.ac.uk/idp/shibboleth
$IDProviders['https://idp-test.lancs.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.brunel.ac.uk/entity
$IDProviders['https://idp.brunel.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.tcat.ac.uk/oala/metadata
$IDProviders['https://idp.tcat.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sccb.ac.uk/idp/shibboleth
$IDProviders['https://idp.sccb.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.aber.ac.uk/shibboleth-TST
$IDProviders['https://shibboleth.aber.ac.uk/shibboleth-TST'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.hughbaird.ac.uk/oala/metadata
$IDProviders['https://idp.hughbaird.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.iwcollege.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.iwcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.dundeeandangus.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.dundeeandangus.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oala.aaschool.ac.uk/oala/metadata
$IDProviders['https://oala.aaschool.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.jisc.ac.uk/idp/shibboleth
$IDProviders['https://idp.jisc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.gsm.org.uk/entity
$IDProviders['https://idp.gsm.org.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.brooklands.ac.uk/idp/shibboleth
$IDProviders['https://idp.brooklands.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.wsc.ac.uk/oala/metadata
$IDProviders['https://idp.wsc.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.gcu.ac.uk/idp/shibboleth
$IDProviders['https://shib.gcu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://gidp.geant.net
$IDProviders['https://gidp.geant.net'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth3.liv.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth3.liv.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://reading.ac.uk/oala-test/metadata
$IDProviders['https://reading.ac.uk/oala-test/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.uwl.ac.uk/idp/shibboleth
$IDProviders['https://idp.uwl.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibidp.kgv.ac.uk/idp/shibboleth
$IDProviders['https://shibidp.kgv.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://hereford.ac.uk/oala/metadata
$IDProviders['https://hereford.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cityofglasgowcollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.cityofglasgowcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.mba.ac.uk/idp/shibboleth
$IDProviders['https://idp.mba.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cirencester.ac.uk/oala/metadata
$IDProviders['https://idp.cirencester.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://athenslart.nelson.ac.uk/oala/metadata
$IDProviders['https://athenslart.nelson.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.coleggwent.ac.uk/idp/shibboleth
$IDProviders['https://idp.coleggwent.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.arts.ac.uk/idp/shibboleth
$IDProviders['https://idptest.arts.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ucreative.ac.uk/oala/metadata
$IDProviders['https://idp.ucreative.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sso.canterbury.ac.uk/idp/shibboleth
$IDProviders['https://sso.canterbury.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://youidlite.youid.net/idp/shibboleth
$IDProviders['https://youidlite.youid.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.wolvcoll.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.wolvcoll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.grimsby.ac.uk/oala/metadata
$IDProviders['https://idp.grimsby.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.proofidcloud.co.uk/idp/shibboleth
$IDProviders['https://idp1.proofidcloud.co.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lec.ac.uk/idp/shibboleth
$IDProviders['https://idp.lec.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.yorksj.ac.uk/oala
$IDProviders['https://idp.yorksj.ac.uk/oala'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.ulster.ac.uk/idp/shibboleth
$IDProviders['https://shib.ulster.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.nnc.ac.uk/idp/shibboleth
$IDProviders['https://shib.nnc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://cavle.org/shibboleth
$IDProviders['https://cavle.org/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.glasgowkelvin.ac.uk/openathens
$IDProviders['https://idp.glasgowkelvin.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.newvic.ac.uk/idp/shibboleth
$IDProviders['https://idp.newvic.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.newcollege.ac.uk/athensla
$IDProviders['https://idp.newcollege.ac.uk/athensla'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.racc.ac.uk/idp/shibboleth
$IDProviders['https://idp.racc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.glyndwr.ac.uk/idp/shibboleth
$IDProviders['https://idp1.glyndwr.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://indiid.net/idp/shibboleth
$IDProviders['https://indiid.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cardiffmet.ac.uk/idp/shibboleth
$IDProviders['https://idp.cardiffmet.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sso-demo.proofidcloud.co.uk/idp/pingfederate
$IDProviders['https://sso-demo.proofidcloud.co.uk/idp/pingfederate'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lstonline.ac.uk/idp/shibboleth
$IDProviders['https://idp.lstonline.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.ashridge.org.uk/openathens
$IDProviders['https://idp.ashridge.org.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rcpch.ac.uk/idp/shibboleth
$IDProviders['https://idp.rcpch.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp2.port.ac.uk/entity
$IDProviders['https://idp2.port.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.nptc.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.nptc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.hillcroft.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.hillcroft.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.carshalton.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.carshalton.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-dev.rcpch.ac.uk/idp/shibboleth
$IDProviders['https://idp-dev.rcpch.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.painless-security.com/idp/shibboleth
$IDProviders['https://idp.painless-security.com/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.collyers.ac.uk/idp/shibboleth
$IDProviders['https://idp.collyers.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.riversidecollege.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.riversidecollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.plumpton.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.plumpton.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.ncgrp.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.ncgrp.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.runshaw.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.runshaw.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.essex.ac.uk/idp/shibboleth
$IDProviders['https://idp-test.essex.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://library-test.lancs.ac.uk/idp/shibboleth
$IDProviders['https://library-test.lancs.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://edinaidp.edina.ac.uk/idp/shibboleth
$IDProviders['https://edinaidp.edina.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.howcollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.howcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oala-dev.leedsbeckett.ac.uk/oala
$IDProviders['https://oala-dev.leedsbeckett.ac.uk/oala'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bucks.ac.uk/openathens
$IDProviders['https://idp.bucks.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp3.leeds.ac.uk/idp/shibboleth
$IDProviders['https://idp3.leeds.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.fife.ac.uk/idp/shibboleth
$IDProviders['https://idp.fife.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib-idp.dev.ja.net/idp/shibboleth
$IDProviders['https://shib-idp.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://login.lstonline.ac.uk/idp/pingfederate
$IDProviders['https://login.lstonline.ac.uk/idp/pingfederate'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rsmith.org.uk/idp/shibboleth
$IDProviders['https://idp.rsmith.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://federation.napier.ac.uk/idp/pingfederate
$IDProviders['https://federation.napier.ac.uk/idp/pingfederate'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sthelens.ac.uk/idp/shibboleth
$IDProviders['https://idp.sthelens.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.reigate.ac.uk/idp/shibboleth
$IDProviders['https://idp.reigate.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://login.ucs.ac.uk/saml2/idp/metadata.php
$IDProviders['https://login.ucs.ac.uk/saml2/idp/metadata.php'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.southdowns.ac.uk/idp/shibboleth
$IDProviders['https://idp.southdowns.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.lythamsixth.ac.uk/shibboleth
$IDProviders['https://shib.lythamsixth.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.exe-coll.ac.uk/idp/shibboleth
$IDProviders['https://idp.exe-coll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.unitedid.org/idp/shibboleth
$IDProviders['https://idp.unitedid.org/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.ucs.org.uk/idp/shibboleth
$IDProviders['https://shibboleth.ucs.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nescol.ac.uk/idp/shibboleth
$IDProviders['https://idp.nescol.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://oala.leedsbeckett.ac.uk/oala
$IDProviders['https://oala.leedsbeckett.ac.uk/oala'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpv3.essingtoncc.co.uk/idp/shibboleth
$IDProviders['https://idpv3.essingtoncc.co.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://devidp.nottingham.ac.uk/idp/shibboleth
$IDProviders['https://devidp.nottingham.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib-staging.data-archive.ac.uk/idp/shibboleth
$IDProviders['https://shib-staging.data-archive.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://fam-uat.salford.ac.uk/oala/metadata
$IDProviders['https://fam-uat.salford.ac.uk/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-staging.shibboleth.ox.ac.uk/shibboleth-idp
$IDProviders['https://idp-staging.shibboleth.ox.ac.uk/shibboleth-idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.abingdon-witney.ac.uk/idp/shibboleth
$IDProviders['https://idp.abingdon-witney.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth3t.lsbu.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth3t.lsbu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp3-test.is.ed.ac.uk/idp/shibboleth
$IDProviders['https://idp3-test.is.ed.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp4.londonlibrary.co.uk/idp/shibboleth
$IDProviders['https://idp4.londonlibrary.co.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://identity.merthyr.ac.uk/idp/shibboleth
$IDProviders['https://identity.merthyr.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://nerckwshibb1.nerc.ac.uk/idp/shibboleth
$IDProviders['https://nerckwshibb1.nerc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://dev-gateway.ncl.ac.uk/idp/shibboleth
$IDProviders['https://dev-gateway.ncl.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.istructe.org/idp/shibboleth
$IDProviders['https://idp.istructe.org/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.efc.ac.uk/idp/shibboleth
$IDProviders['https://idp.efc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.westkentandashford.ac.uk/idp/shibboleth
$IDProviders['https://idp.westkentandashford.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://ssoa.bl.uk/idp/shibboleth
$IDProviders['https://ssoa.bl.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpv3.tcat.ac.uk/idp/shibboleth
$IDProviders['https://idpv3.tcat.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://testidp1v3.ntu.ac.uk/idp/shibboleth
$IDProviders['https://testidp1v3.ntu.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibdev3.stir.ac.uk/idp/shibboleth
$IDProviders['https://shibdev3.stir.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.wmcollege.ac.uk/idp/shibboleth
$IDProviders['https://idp.wmcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpv3.staffs.ac.uk/idp/shibboleth
$IDProviders['https://idpv3.staffs.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp1.bcot.ac.uk/idp/shibboleth
$IDProviders['https://idp1.bcot.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.northlindsey.ac.uk/openathens
$IDProviders['https://idp.northlindsey.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://somgateway.uk/idp/shibboleth
$IDProviders['https://somgateway.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bolton.ac.uk/idp/shibboleth
$IDProviders['https://idp.bolton.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://identify-test.hull.ac.uk/entity
$IDProviders['https://identify-test.hull.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://onepass.thomsonreuters.com/entity-idp
$IDProviders['https://onepass.thomsonreuters.com/entity-idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://signon-dev.glos.ac.uk/entity
$IDProviders['https://signon-dev.glos.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.camre.ac.uk/idp/shibboleth
$IDProviders['https://idp.camre.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://kclidpdev.kcl.ac.uk/idp/shibboleth
$IDProviders['https://kclidpdev.kcl.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.edinburghcollege.ac.uk/idp/shibboleth
$IDProviders['https://idptest.edinburghcollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpv3.barnetsouthgate.ac.uk/idp/shibboleth
$IDProviders['https://idpv3.barnetsouthgate.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rutc.ac.uk/idp/shibboleth
$IDProviders['https://idp.rutc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth3.dundeeandangus.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth3.dundeeandangus.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://login.uos.ac.uk/saml2/idp/metadata.php
$IDProviders['https://login.uos.ac.uk/saml2/idp/metadata.php'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sso.lowestoft.ac.uk/idp/shibboleth
$IDProviders['https://sso.lowestoft.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://fr-shib02.franklin.ac.uk/idp/shibboleth
$IDProviders['https://fr-shib02.franklin.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.barton.ac.uk/shibboleth
$IDProviders['https://idp.barton.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sp3.kcc.ac.uk/idp/shibboleth
$IDProviders['https://sp3.kcc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.forthvalley.ac.uk/shibboleth
$IDProviders['https://idp.forthvalley.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://qub-shib.qub.ac.uk/idp/shibboleth
$IDProviders['https://qub-shib.qub.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bmetc.ac.uk/idp/shibboleth
$IDProviders['https://idp.bmetc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.solihull.ac.uk/idp/shibboleth
$IDProviders['https://idp.solihull.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.glasgowclyde.ac.uk/idp/shibboleth
$IDProviders['https://idp.glasgowclyde.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpdev.kingston.ac.uk/idp/shibboleth
$IDProviders['https://idpdev.kingston.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://identity.lcb.ac.uk/idp/shibboleth
$IDProviders['https://identity.lcb.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://sso.furness.ac.uk/idp/shibboleth
$IDProviders['https://sso.furness.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.stran.ac.uk/idp/shibboleth
$IDProviders['https://idp.stran.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.ulster.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.ulster.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth-test.ulster.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth-test.ulster.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-dev.isys.bris.ac.uk/idp/shibboleth
$IDProviders['https://idp-dev.isys.bris.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://nevada.varndean.ac.uk/idp/shibboleth
$IDProviders['https://nevada.varndean.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://fedauth-pp.london.edu/oala/metadata
$IDProviders['https://fedauth-pp.london.edu/oala/metadata'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sheffcol.ac.uk/idp/shibboleth
$IDProviders['https://idp.sheffcol.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://nca-idpv3test.ncn.ac.uk/idp/shibboleth
$IDProviders['https://nca-idpv3test.ncn.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpv3.stc.ac.uk/idp/shibboleth
$IDProviders['https://idpv3.stc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://yin.faheystuart.co.uk/idp/shibboleth
$IDProviders['https://yin.faheystuart.co.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.rad.org.uk/openathens
$IDProviders['https://idp.rad.org.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.reaseheath.ac.uk/openathens
$IDProviders['https://idp.reaseheath.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.wmin.ac.uk/entity
$IDProviders['https://idp-test.wmin.ac.uk/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpv3.stokecoll.ac.uk/idp/shibboleth
$IDProviders['https://idpv3.stokecoll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibbtest.srv.hull-college.ac.uk/idp/shibboleth
$IDProviders['https://shibbtest.srv.hull-college.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://a1b682-Bournemouth-Borough-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://a1b682-Bournemouth-Borough-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.cambria.ac.uk/openathens
$IDProviders['https://idp.cambria.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.darlington.ac.uk/openathens
$IDProviders['https://idp.darlington.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibdev.hw.ac.uk/idp/shibboleth
$IDProviders['https://shibdev.hw.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sftwales.com/idp/shibboleth
$IDProviders['https://idp.sftwales.com/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://628467-Solihull-Metropolitan-Borough-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://628467-Solihull-Metropolitan-Borough-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://576a09-North-Yorkshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://576a09-North-Yorkshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://bruce.henley-cov.ac.uk/idp/shibboleth
$IDProviders['https://bruce.henley-cov.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://e39032-Surrey-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://e39032-Surrey-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://78b9fd-Nottingham-City-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://78b9fd-Nottingham-City-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://1ca07f-Nottinghamshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://1ca07f-Nottinghamshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://30694f-London-Borough-of-Tower-Hamlets.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://30694f-London-Borough-of-Tower-Hamlets.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp3.dev.cardiffmet.ac.uk/idp/shibboleth
$IDProviders['https://idp3.dev.cardiffmet.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://f9dc6a-Buckinghamshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://f9dc6a-Buckinghamshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://1d185e-Camden-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://1d185e-Camden-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://1940aa-Derby-City-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://1940aa-Derby-City-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://61d042-Derbyshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://61d042-Derbyshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://39a0f4-Doncaster-Metropolitan-Borough-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://39a0f4-Doncaster-Metropolitan-Borough-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://e68fef-Hertfordshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://e68fef-Hertfordshire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://c23668-Leicestershire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://c23668-Leicestershire-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://25e53a-Rutland-County-Council-District-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://25e53a-Rutland-County-Council-District-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://5d0b97-Kent-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://5d0b97-Kent-County-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://c51255-Milton-Keynes-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://c51255-Milton-Keynes-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://bd4b07-Southampton-City-Council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://bd4b07-Southampton-City-Council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.bathspa.ac.uk/idp/shibboleth
$IDProviders['https://idp-test.bathspa.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.shibboleth.yorksj.ac.uk/idp/shibboleth
$IDProviders['https://idp.shibboleth.yorksj.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.test.bath.ac.uk/shibboleth
$IDProviders['https://idp.test.bath.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://safari.data-archive.ac.uk/idp/shibboleth
$IDProviders['https://safari.data-archive.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://afbi-shib.qub.ac.uk/idp/shibboleth
$IDProviders['https://afbi-shib.qub.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.salfordcc.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.salfordcc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.grimsby.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.grimsby.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.pearsoncollege.com/openathens
$IDProviders['https://idp.pearsoncollege.com/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-qa.shef.ac.uk/shibboleth
$IDProviders['https://idp-qa.shef.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-dev.jisc.ac.uk/idp/shibboleth
$IDProviders['https://idp-dev.jisc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.westdean.org.uk/idp/shibboleth
$IDProviders['https://shib.westdean.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://kanturk.wigan-leigh.ac.uk/idp/shibboleth
$IDProviders['https://kanturk.wigan-leigh.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://identityfor.co.uk/r4c
$IDProviders['https://identityfor.co.uk/r4c'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.sfx.ac.uk/openathens
$IDProviders['https://idp.sfx.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://2ef623-university-of-glasgow.saml-idp.test.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://2ef623-university-of-glasgow.saml-idp.test.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.osfc.ac.uk/idp/shibboleth
$IDProviders['https://idptest.osfc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-test.shibboleth.qmul.ac.uk/idp/shibboleth
$IDProviders['https://idp-test.shibboleth.qmul.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib.fra.ac.uk/idp/shibboleth
$IDProviders['https://shib.fra.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://scgidp.shrewsbury.ac.uk/idp/shibboleth
$IDProviders['https://scgidp.shrewsbury.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://dialect2.liv-coll.ac.uk/idp/shibboleth
$IDProviders['https://dialect2.liv-coll.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lsec.ac.uk/openathens
$IDProviders['https://idp.lsec.ac.uk/openathens'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idptest.kingston.ac.uk/shibboleth
$IDProviders['https://idptest.kingston.ac.uk/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibprod.hw.ac.uk/idp/shibboleth
$IDProviders['https://shibprod.hw.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.itchen.ac.uk/idp/shibboleth
$IDProviders['https://idp.itchen.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://federation-qa.gsk.com
$IDProviders['https://federation-qa.gsk.com'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.royalmarsdenschool.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.royalmarsdenschool.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.ayrshire.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.ayrshire.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib-idp.crawley.ac.uk/idp/shibboleth
$IDProviders['https://shib-idp.crawley.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idpv3.btc.ac.uk/idp/shibboleth
$IDProviders['https://idpv3.btc.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.shipley.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.shipley.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shibboleth.eastkent.ac.uk/idp/shibboleth
$IDProviders['https://shibboleth.eastkent.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idhub.test.eduteams.org/proxy/aHR0cHM6Ly9hY2NvdW50cy5nb29nbGUuY29t
$IDProviders['https://idhub.test.eduteams.org/proxy/aHR0cHM6Ly9hY2NvdW50cy5nb29nbGUuY29t'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idhub.test.eduteams.org/proxy/aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL2RpYWxvZy9vYXV0aA==
$IDProviders['https://idhub.test.eduteams.org/proxy/aHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL2RpYWxvZy9vYXV0aA=='] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idhub.test.eduteams.org/proxy/aHR0cHM6Ly9vcmNpZC5vcmcvb2F1dGgvYXV0aG9yaXpl
$IDProviders['https://idhub.test.eduteams.org/proxy/aHR0cHM6Ly9vcmNpZC5vcmcvb2F1dGgvYXV0aG9yaXpl'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idhub.test.eduteams.org/proxy/aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL29hdXRoL3YyL2F1dGhvcml6YXRpb24=
$IDProviders['https://idhub.test.eduteams.org/proxy/aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL29hdXRoL3YyL2F1dGhvcml6YXRpb24='] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idhub.test.eduteams.org/proxy/aHR0cDovL2dpdGh1Yi5jb20vbG9naW4vb2F1dGgvYXV0aG9yaXpl
$IDProviders['https://idhub.test.eduteams.org/proxy/aHR0cDovL2dpdGh1Yi5jb20vbG9naW4vb2F1dGgvYXV0aG9yaXpl'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.nottinghamcollege.ac.uk/idp
$IDProviders['https://idp.nottinghamcollege.ac.uk/idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.eastberks.ac.uk/idp/shibboleth
$IDProviders['https://idp.eastberks.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.lstmed.ac.uk/idp/shibboleth
$IDProviders['https://idp.lstmed.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib3idp.edgehill.ac.uk/idp/shibboleth
$IDProviders['https://shib3idp.edgehill.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: http://adfs.regents.ac.uk/adfs/services/trust
$IDProviders['http://adfs.regents.ac.uk/adfs/services/trust'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp-liberate-stg.rsmith.org.uk/idp/shibboleth
$IDProviders['https://idp-liberate-stg.rsmith.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://test.ebi.ac.uk/idp/shibboleth
$IDProviders['https://test.ebi.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://shib-idp.arden.ac.uk/idp/shibboleth
$IDProviders['https://shib-idp.arden.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idhub.eduteams.org/proxy/aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL29hdXRoL3YyL2F1dGhvcml6YXRpb24=
$IDProviders['https://idhub.eduteams.org/proxy/aHR0cHM6Ly93d3cubGlua2VkaW4uY29tL29hdXRoL3YyL2F1dGhvcml6YXRpb24='] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idhub.eduteams.org/proxy/aHR0cDovL2dpdGh1Yi5jb20vbG9naW4vb2F1dGgvYXV0aG9yaXpl
$IDProviders['https://idhub.eduteams.org/proxy/aHR0cDovL2dpdGh1Yi5jb20vbG9naW4vb2F1dGgvYXV0aG9yaXpl'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://pleiades.lscollege.ac.uk/idp/shibboleth
$IDProviders['https://pleiades.lscollege.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://slateford.support.ukfederation.org.uk/idp/shibboleth
$IDProviders['https://slateford.support.ukfederation.org.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://jisc-liberate-migrate1.ac.uk/idp/shibboleth
$IDProviders['https://jisc-liberate-migrate1.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.neweraed.co.uk/idp/shibboleth
$IDProviders['https://idp.neweraed.co.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.blackpoolsixth.ac.uk/idp
$IDProviders['https://idp.blackpoolsixth.ac.uk/idp'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.bucks.ac.uk/test/entity
$IDProviders['https://idp.bucks.ac.uk/test/entity'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp01.brooksbymelton.ac.uk/idp/shibboleth
$IDProviders['https://idp01.brooksbymelton.ac.uk/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://idp.weymouth.ac.uk/test/idp/shibboleth
$IDProviders['https://idp.weymouth.ac.uk/test/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');
//entityID: https://22dd72-stockport-metropolitan-borough-council.saml-idp.managed.dev.ja.net/idp/shibboleth
$IDProviders['https://22dd72-stockport-metropolitan-borough-council.saml-idp.managed.dev.ja.net/idp/shibboleth'] = array( 'Type' => 'http://ukfederation.org.uk');

$IDProviders['http://eduid.at'] = array ( 'Type' => 'category', 'Name' => 'ACOnet Identity Federation');
//entityID: https://idp.aco.net/idp/shibboleth
$IDProviders['https://idp.aco.net/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://login.fhv.at/shibboleth
$IDProviders['https://login.fhv.at/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://shibboleth.fhwn.ac.at/idp/shibboleth
$IDProviders['https://shibboleth.fhwn.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.meduniwien.ac.at/idp/shibboleth
$IDProviders['https://idp.meduniwien.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.zid.tuwien.ac.at/saml2
$IDProviders['https://idp.zid.tuwien.ac.at/saml2'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.mci4me.at/idp/shibboleth
$IDProviders['https://idp.mci4me.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://shibboleth.im.jku.at/idp/shibboleth
$IDProviders['https://shibboleth.im.jku.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.fh-kaernten.at/idp/shibboleth
$IDProviders['https://idp.fh-kaernten.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://zididp.uni-graz.at/idp/shibboleth
$IDProviders['https://zididp.uni-graz.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://sso.sbg.ac.at/idp/shibboleth
$IDProviders['https://sso.sbg.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://sso.tugraz.at/idp/shibboleth
$IDProviders['https://sso.tugraz.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.vu-wien.ac.at/idp/shibboleth
$IDProviders['https://idp.vu-wien.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://shib.ihs.ac.at/idp/shibboleth
$IDProviders['https://shib.ihs.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.fh-joanneum.at/idp/shibboleth
$IDProviders['https://idp.fh-joanneum.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.ist.ac.at/idp/shibboleth
$IDProviders['https://idp.ist.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.uibk.ac.at/idp/shibboleth
$IDProviders['https://idp.uibk.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://sso.fh-salzburg.ac.at/idp/shibboleth
$IDProviders['https://sso.fh-salzburg.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://weblogin.fh-ooe.at/idp/shibboleth
$IDProviders['https://weblogin.fh-ooe.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://auth.ph-noe.ac.at/idp/shibboleth
$IDProviders['https://auth.ph-noe.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.phst.at/idp/shibboleth
$IDProviders['https://idp.phst.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://login.bruckneruni.at/idp/shibboleth
$IDProviders['https://login.bruckneruni.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://weblogin.oeaw.ac.at/idp/shibboleth
$IDProviders['https://weblogin.oeaw.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.boku.ac.at/idp/shibboleth
$IDProviders['https://idp.boku.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.fernfh.ac.at/idp/shibboleth
$IDProviders['https://idp.fernfh.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.kphvie.ac.at/idp/shibboleth
$IDProviders['https://idp.kphvie.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://sso.fhstp.ac.at/idp/shibboleth
$IDProviders['https://sso.fhstp.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://login.kug.ac.at/idp/shibboleth
$IDProviders['https://login.kug.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://eduid.campus02.at/idp/shibboleth
$IDProviders['https://eduid.campus02.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');
//entityID: https://idp.wu.ac.at/idp/shibboleth
$IDProviders['https://idp.wu.ac.at/idp/shibboleth'] = array( 'Type' => 'http://eduid.at');

$IDProviders['http://cofre.reuna.cl'] = array ( 'Type' => 'category', 'Name' => 'COFRe');
//entityID: https://idp2.redclara.net/idp/shibboleth
$IDProviders['https://idp2.redclara.net/idp/shibboleth'] = array( 'Type' => 'http://cofre.reuna.cl');
//entityID: https://idp.reuna.cl/idp/shibboleth
$IDProviders['https://idp.reuna.cl/idp/shibboleth'] = array( 'Type' => 'http://cofre.reuna.cl');

$IDProviders['http://aai.arnes.si'] = array ( 'Type' => 'category', 'Name' => 'ArnesAAI Slovenska izobraževalno raziskovalna federacija');
//entityID: https://idp.ijs.si/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.ijs.si/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.scng.si/idp/20130321
$IDProviders['https://idp.scng.si/idp/20130321'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.uni-lj.si/idp/20100525
$IDProviders['https://idp.uni-lj.si/idp/20100525'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.ung.si/idp/20111102
$IDProviders['https://idp.ung.si/idp/20111102'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.aai.um.si/idp
$IDProviders['https://idp.aai.um.si/idp'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.scptuj.si/idp/20111102
$IDProviders['https://idp.scptuj.si/idp/20111102'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://gimb-idp-1.gimb.org/idp/20130521
$IDProviders['https://gimb-idp-1.gimb.org/idp/20130521'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.mf.uni-lj.si/idp/20111101
$IDProviders['https://idp.mf.uni-lj.si/idp/20111101'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.sc-nm.si/idp/20150127
$IDProviders['https://idp.sc-nm.si/idp/20150127'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.gpiran.si/idp/20110919
$IDProviders['https://idp.gpiran.si/idp/20110919'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.almamater.si/idp/20110921
$IDProviders['https://idp.almamater.si/idp/20110921'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.aai.arnes.si/idp/20090116
$IDProviders['https://idp.aai.arnes.si/idp/20090116'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://edi.izum.si/idp/20100722
$IDProviders['https://edi.izum.si/idp/20100722'] = array( 'Type' => 'http://aai.arnes.si');
//entityID: https://idp.geo-zs.si/idp/20110325
$IDProviders['https://idp.geo-zs.si/idp/20110325'] = array( 'Type' => 'http://aai.arnes.si');

$IDProviders['http://www.heanet.ie'] = array ( 'Type' => 'category', 'Name' => 'Edugate');
//entityID: https://idp2.dcu.ie/idp/profile/Metadata/SAML
$IDProviders['https://idp2.dcu.ie/idp/profile/Metadata/SAML'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.heanet.ie/idp/shibboleth
$IDProviders['https://idp.heanet.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.cit.ie/idp
$IDProviders['https://idp.cit.ie/idp'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.dkit.ie/idp/shibboleth
$IDProviders['https://idp.dkit.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.lit.ie/saml2
$IDProviders['https://idp.lit.ie/saml2'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.gmit.ie/idp/shibboleth
$IDProviders['https://idp.gmit.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.wit.ie/idp/shibboleth
$IDProviders['https://idp.wit.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.ittralee.ie/idp
$IDProviders['https://idp.ittralee.ie/idp'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.dit.ie/idp/shibboleth
$IDProviders['https://idp.dit.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.iadt.ie/idp/shibboleth
$IDProviders['https://idp.iadt.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://sso.ucd.ie/idp/shibboleth
$IDProviders['https://sso.ucd.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.nuigalway.ie/shibboleth
$IDProviders['https://idp.nuigalway.ie/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.ul.ie/idp/shibboleth
$IDProviders['https://idp.ul.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.ait.ie/idp/shibboleth
$IDProviders['https://idp.ait.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.tcd.ie/idp/shibboleth
$IDProviders['https://idp.tcd.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.it-tallaght.ie/idp/shibboleth
$IDProviders['https://idp.it-tallaght.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.lyit.ie/idp/shibboleth
$IDProviders['https://idp.lyit.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://edugate.itb.ie/idp/shibboleth
$IDProviders['https://edugate.itb.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.itsligo.ie/idp/shibboleth
$IDProviders['https://idp.itsligo.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.itcarlow.ie/idp/shibboleth
$IDProviders['https://idp.itcarlow.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://hidp.ucc.ie/idp/shibboleth
$IDProviders['https://hidp.ucc.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.nuim.ie/idp/shibboleth
$IDProviders['https://idp.nuim.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.ipa.ie/idp/shibboleth
$IDProviders['https://idp.ipa.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.mic.ul.ie/idp/shibboleth
$IDProviders['https://idp.mic.ul.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.marine.ie/idp/shibboleth
$IDProviders['https://idp.marine.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.dias.ie/idp/shibboleth
$IDProviders['https://idp.dias.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.ncirl.ie/idp/shibboleth
$IDProviders['https://idp.ncirl.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.rcpi.ie/idp/shibboleth
$IDProviders['https://idp.rcpi.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: http://baran-is0.educampus.ie/adfs/services/trust
$IDProviders['http://baran-is0.educampus.ie/adfs/services/trust'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://webauth.dbs.ie/idp/shibboleth
$IDProviders['https://webauth.dbs.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.gcd.ie/idp/shibboleth
$IDProviders['https://idp.gcd.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');
//entityID: https://idp.riam.ie/idp/shibboleth
$IDProviders['https://idp.riam.ie/idp/shibboleth'] = array( 'Type' => 'http://www.heanet.ie');

$IDProviders['https://aai.pionier.net.pl'] = array ( 'Type' => 'category', 'Name' => 'PIONIER.Id');
//entityID: https://login.aai.pionier.net.pl/IdP/saml2/idp/metadata.php
$IDProviders['https://login.aai.pionier.net.pl/IdP/saml2/idp/metadata.php'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://sso.man.poznan.pl/idp/shibboleth
$IDProviders['https://sso.man.poznan.pl/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://sso.umk.pl/idp/shibboleth
$IDProviders['https://sso.umk.pl/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://login.tu.kielce.pl/idp/shibboleth
$IDProviders['https://login.tu.kielce.pl/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://idp.task.gda.pl/idp/shibboleth
$IDProviders['https://idp.task.gda.pl/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://login.utp.edu.pl/idp/shibboleth
$IDProviders['https://login.utp.edu.pl/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://fed.p.lodz.pl/idp/shibboleth
$IDProviders['https://fed.p.lodz.pl/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://login.umcs.pl:9443/idp/shibboleth
$IDProviders['https://login.umcs.pl:9443/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://shibboleth.uni.opole.pl/idp/shibboleth
$IDProviders['https://shibboleth.uni.opole.pl/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://idp.prz.edu.pl/idp/shibboleth
$IDProviders['https://idp.prz.edu.pl/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');
//entityID: https://denebola.wcss.pl:8080/idp/shibboleth
$IDProviders['https://denebola.wcss.pl:8080/idp/shibboleth'] = array( 'Type' => 'https://aai.pionier.net.pl');

$IDProviders['https://incommon.org'] = array ( 'Type' => 'category', 'Name' => 'InCommon');
//entityID: urn:mace:incommon:osu.edu
$IDProviders['urn:mace:incommon:osu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.cit.cornell.edu/idp/shibboleth
$IDProviders['https://shibidp.cit.cornell.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucop.edu
$IDProviders['urn:mace:incommon:ucop.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:uci.edu
$IDProviders['urn:mace:incommon:uci.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:washington.edu
$IDProviders['urn:mace:incommon:washington.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:internet2.edu
$IDProviders['urn:mace:incommon:internet2.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucsd.edu
$IDProviders['urn:mace:incommon:ucsd.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibb-idp.georgetown.edu/idp/shibboleth
$IDProviders['https://shibb-idp.georgetown.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:case.edu
$IDProviders['urn:mace:incommon:case.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:virginia.edu
$IDProviders['urn:mace:incommon:virginia.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:uchicago.edu
$IDProviders['urn:mace:incommon:uchicago.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:muohio.edu
$IDProviders['urn:mace:incommon:muohio.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:stanford.edu
$IDProviders['urn:mace:incommon:stanford.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:uab.edu
$IDProviders['urn:mace:incommon:uab.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucla.edu
$IDProviders['urn:mace:incommon:ucla.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib2.its.rochester.edu/idp/shibboleth
$IDProviders['https://shib2.its.rochester.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucr.edu
$IDProviders['urn:mace:incommon:ucr.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.umaryland.edu/idp/shibboleth
$IDProviders['https://webauth.umaryland.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:nyu.edu
$IDProviders['urn:mace:incommon:nyu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:dartmouth.edu
$IDProviders['urn:mace:incommon:dartmouth.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucmerced.edu
$IDProviders['urn:mace:incommon:ucmerced.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:usc.edu
$IDProviders['urn:mace:incommon:usc.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:psu.edu
$IDProviders['urn:mace:incommon:psu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:umbc.edu
$IDProviders['urn:mace:incommon:umbc.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:duke.edu
$IDProviders['urn:mace:incommon:duke.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ohio.edu
$IDProviders['urn:mace:incommon:ohio.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:stonybrook.edu
$IDProviders['urn:mace:incommon:stonybrook.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:umd.edu
$IDProviders['urn:mace:incommon:umd.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:clemson.edu
$IDProviders['urn:mace:incommon:clemson.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ohiolink.edu
$IDProviders['urn:mace:incommon:ohiolink.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:johnshopkins.edu
$IDProviders['urn:mace:incommon:johnshopkins.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucdavis.edu
$IDProviders['urn:mace:incommon:ucdavis.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:tamu.edu
$IDProviders['urn:mace:incommon:tamu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:iu.edu
$IDProviders['urn:mace:incommon:iu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:northwestern.edu
$IDProviders['urn:mace:incommon:northwestern.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:msu.edu
$IDProviders['urn:mace:incommon:msu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:lafayette.edu
$IDProviders['urn:mace:incommon:lafayette.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.symplicity.com/idp/shibboleth
$IDProviders['https://idp.symplicity.com/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:richmond.edu
$IDProviders['urn:mace:incommon:richmond.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.wisc.edu/idp/shibboleth
$IDProviders['https://login.wisc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:nih.gov
$IDProviders['urn:mace:incommon:nih.gov'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.umass.edu/idp/shibboleth
$IDProviders['https://webauth.umass.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:columbia.edu
$IDProviders['urn:mace:incommon:columbia.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp-co.calstate.edu/idp/shibboleth
$IDProviders['https://idp-co.calstate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:jmu.edu
$IDProviders['urn:mace:incommon:jmu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:lbl.gov
$IDProviders['urn:mace:incommon:lbl.gov'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:mlml.calstate.edu
$IDProviders['urn:mace:incommon:mlml.calstate.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.vcu.edu/idp/shibboleth
$IDProviders['https://shibboleth.vcu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:vt.edu
$IDProviders['urn:mace:incommon:vt.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:odu.edu
$IDProviders['urn:mace:incommon:odu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.umich.edu/idp/shibboleth
$IDProviders['https://shibboleth.umich.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:berkeley.edu
$IDProviders['urn:mace:incommon:berkeley.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:utah.edu
$IDProviders['urn:mace:incommon:utah.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.wm.edu/idp/shibboleth
$IDProviders['https://idp.wm.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://test-idps.rutgers.edu/idp/shibboleth
$IDProviders['https://test-idps.rutgers.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:rutgers.edu
$IDProviders['urn:mace:incommon:rutgers.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.emory.edu/idp/shibboleth
$IDProviders['https://login.emory.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:uiuc.edu
$IDProviders['urn:mace:incommon:uiuc.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.gmu.edu/idp/shibboleth
$IDProviders['https://shibboleth.gmu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:carleton.edu
$IDProviders['urn:mace:incommon:carleton.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:sc.edu
$IDProviders['urn:mace:incommon:sc.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:starkstate.edu
$IDProviders['urn:mace:incommon:starkstate.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.es.net/idp/shibboleth
$IDProviders['https://idp.es.net/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:umn.edu
$IDProviders['urn:mace:incommon:umn.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:uiowa.edu
$IDProviders['urn:mace:incommon:uiowa.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp2.unr.edu/idp/shibboleth
$IDProviders['https://idp2.unr.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:usf.edu
$IDProviders['urn:mace:incommon:usf.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:udayton.edu
$IDProviders['urn:mace:incommon:udayton.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:arizona.edu
$IDProviders['urn:mace:incommon:arizona.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:mit.edu
$IDProviders['urn:mace:incommon:mit.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://vushib-idp.vanderbilt.edu/idp/Shibboleth
$IDProviders['https://vushib-idp.vanderbilt.edu/idp/Shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucsf.edu
$IDProviders['urn:mace:incommon:ucsf.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.unl.edu/idp/shibboleth
$IDProviders['https://shib.unl.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucsc.edu
$IDProviders['urn:mace:incommon:ucsc.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.purdue.edu/idp/shibboleth
$IDProviders['https://idp.purdue.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.colostate.edu/idp/shibboleth
$IDProviders['https://shibidp.colostate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.mtu.edu/idp/shibboleth
$IDProviders['https://sso.mtu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:stevens.edu
$IDProviders['urn:mace:incommon:stevens.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:mcnc.org
$IDProviders['urn:mace:incommon:mcnc.org'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:asu.edu
$IDProviders['urn:mace:incommon:asu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uhd.edu/idp/shibboleth
$IDProviders['https://idp.uhd.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.hsc.edu/adfs/services/trust
$IDProviders['https://sso.hsc.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.liberty.edu/idp/shibboleth
$IDProviders['https://shibboleth.liberty.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.brown.edu/idp/shibboleth
$IDProviders['https://sso.brown.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib-idp.umsystem.edu/idp/shibboleth
$IDProviders['https://shib-idp.umsystem.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ncsu.edu
$IDProviders['urn:mace:incommon:ncsu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://fedauth.colorado.edu/idp/shibboleth
$IDProviders['https://fedauth.colorado.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ramapo.edu
$IDProviders['urn:mace:incommon:ramapo.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.ufl.edu/idp/shibboleth
$IDProviders['https://login.ufl.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://adfs.unco.edu/adfs/services/trust
$IDProviders['http://adfs.unco.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://vsu-pbslive-01v.vsu.edu/idp/shibboleth
$IDProviders['https://vsu-pbslive-01v.vsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:unc.edu
$IDProviders['urn:mace:incommon:unc.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:uww.edu
$IDProviders['urn:mace:incommon:uww.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.calpoly.edu/idp/shibboleth
$IDProviders['https://idp.calpoly.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uvm.edu/idp/shibboleth
$IDProviders['https://idp.uvm.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:nau.edu
$IDProviders['urn:mace:incommon:nau.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.wustl.edu/idp/shibboleth
$IDProviders['https://login.wustl.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://mamiwata.du.edu/idp
$IDProviders['https://mamiwata.du.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:humboldt.edu
$IDProviders['urn:mace:incommon:humboldt.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.csumb.edu/idp/shibboleth
$IDProviders['https://sso.csumb.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.csuchico.edu/idp/shibboleth
$IDProviders['https://shibboleth.csuchico.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.cpp.edu/idp/shibboleth
$IDProviders['https://idp.cpp.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.csudh.edu/idp/shibboleth
$IDProviders['https://idp.csudh.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.okstate.edu/idp/shibboleth
$IDProviders['https://idp.okstate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.pennkey.upenn.edu/idp/shibboleth
$IDProviders['https://idp.pennkey.upenn.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.fullerton.edu/idp/shibboleth
$IDProviders['https://shibboleth.fullerton.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.csus.edu/idp/shibboleth
$IDProviders['https://idp.csus.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:alaska.edu
$IDProviders['urn:mace:incommon:alaska.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.shib.lsu.edu/idp/shibboleth
$IDProviders['https://webauth.shib.lsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.sonoma.edu/shibboleth
$IDProviders['https://login.sonoma.edu/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.csusb.edu/idp/shibboleth
$IDProviders['https://idp.csusb.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp01.sjsu.edu/idp/shibboleth
$IDProviders['https://idp01.sjsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://namid.fairfield.edu:8443/nidp/saml2/metadata
$IDProviders['https://namid.fairfield.edu:8443/nidp/saml2/metadata'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib-idp.its.csufresno.edu/idp/shibboleth
$IDProviders['https://shib-idp.its.csufresno.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://logintest.wustl.edu/idp/shibboleth
$IDProviders['https://logintest.wustl.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://cma-shibboleth.csum.edu/idp/shibboleth
$IDProviders['https://cma-shibboleth.csum.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.uic.edu/shibboleth
$IDProviders['https://shibboleth.uic.edu/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.ohsu.edu/idp/shibboleth
$IDProviders['https://idp.ohsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://www.ohsu.edu/idp/shibboleth
$IDProviders['https://www.ohsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://prdidp.uncg.edu/idp/shibboleth
$IDProviders['https://prdidp.uncg.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.csusm.edu/idp/shibboleth
$IDProviders['https://idp.csusm.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.sdsu.edu/idp/shibboleth
$IDProviders['https://idp.sdsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.educause.edu/idp/shibboleth
$IDProviders['https://idp.educause.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.utsystem.edu/idp/shibboleth
$IDProviders['https://idp.utsystem.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.nss.udel.edu/idp/shibboleth
$IDProviders['https://idp.nss.udel.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.its.utexas.edu/idp/shibboleth
$IDProviders['https://idp.its.utexas.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.sfsu.edu/idp/shibboleth
$IDProviders['https://idp.sfsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.utdallas.edu/idp/shibboleth
$IDProviders['https://idp.utdallas.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib2.utep.edu/idp/shibboleth
$IDProviders['https://shib2.utep.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib2.swmed.edu/idp/shibboleth
$IDProviders['https://shib2.swmed.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uta.edu/idp/shibboleth
$IDProviders['https://idp.uta.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib-idp2.uth.tmc.edu/idp/shibboleth
$IDProviders['https://shib-idp2.uth.tmc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.it.utsa.edu/idp/shibboleth
$IDProviders['https://sso.it.utsa.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uttyler.edu/idp/shibboleth
$IDProviders['https://idp.uttyler.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.utmb.edu/idp/shibboleth
$IDProviders['https://idp.utmb.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.uthscsa.edu/idp/shibboleth
$IDProviders['https://shib.uthscsa.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.utb.edu/idp/shibboleth
$IDProviders['https://shib.utb.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp1.utpa.edu/idp/shibboleth
$IDProviders['https://idp1.utpa.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibb.utpb.edu/idp/shibboleth
$IDProviders['https://shibb.utpb.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.mdanderson.org/idp/shibboleth
$IDProviders['https://shib.mdanderson.org/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://infp-shib-01.uthct.edu/idp/shibboleth
$IDProviders['https://infp-shib-01.uthct.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth-2.baylor.edu/idp/shibboleth
$IDProviders['https://shibboleth-2.baylor.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.cmu.edu/idp/shibboleth
$IDProviders['https://login.cmu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://mckinley.csuci.edu/idp/shibboleth
$IDProviders['https://mckinley.csuci.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.uams.edu/idp/shibboleth
$IDProviders['https://shibboleth.uams.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:csun.edu
$IDProviders['urn:mace:incommon:csun.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://weblogin.albany.edu/shibboleth/idp2
$IDProviders['https://weblogin.albany.edu/shibboleth/idp2'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.iastate.edu/shibboleth
$IDProviders['https://idp.iastate.edu/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.princeton.edu/idp/shibboleth
$IDProviders['https://idp.princeton.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.augsburg.edu/simplesaml/saml2/idp/metadata.php
$IDProviders['https://sso.augsburg.edu/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.uc.edu/idp/shibboleth
$IDProviders['https://login.uc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.luc.edu/idp/shibboleth
$IDProviders['https://shibidp.luc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.caltech.edu/idp/shibboleth
$IDProviders['https://idp.caltech.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.csustan.edu/idp/shibboleth
$IDProviders['https://shibboleth.csustan.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.uoregon.edu/idp/shibboleth
$IDProviders['https://shibboleth.uoregon.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://passport.pitt.edu/idp/shibboleth
$IDProviders['https://passport.pitt.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://vince.csueastbay.edu/idp/shibboleth
$IDProviders['https://vince.csueastbay.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://its-shib.its.csulb.edu/idp/shibboleth
$IDProviders['https://its-shib.its.csulb.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.si.edu/idp/shibboleth
$IDProviders['https://idp.si.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.csub.edu/idp/shibboleth
$IDProviders['https://shib.csub.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://identityprovider.anl.gov/idp/shibboleth
$IDProviders['https://identityprovider.anl.gov/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.coconino.edu/idp/shibboleth
$IDProviders['https://shibboleth.coconino.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://id.nps.edu/idp/shibboleth
$IDProviders['https://id.nps.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.memphis.edu/idp/shibboleth
$IDProviders['https://sso.memphis.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.calstatela.edu/idp/shibboleth
$IDProviders['https://idp.calstatela.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.usu.edu/idp/shibboleth
$IDProviders['https://shibboleth.usu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.tulane.edu/idp/shibboleth
$IDProviders['https://idp.tulane.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uwm.edu/idp/shibboleth
$IDProviders['https://idp.uwm.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.american.edu/idp/shibboleth
$IDProviders['https://idp.american.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.ubalt.edu/idp/shibboleth
$IDProviders['https://idp.ubalt.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.gac.edu/idp/shibboleth
$IDProviders['https://sso.gac.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.uni.edu/idp/shibboleth
$IDProviders['https://shib.uni.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.regis.edu
$IDProviders['https://login.regis.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://vm-shibboleth.umb.edu/idp/shibboleth
$IDProviders['https://vm-shibboleth.umb.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.udc.edu/idp/shibboleth
$IDProviders['https://idp.udc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.ecu.edu/idp/shibboleth
$IDProviders['https://sso.ecu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.gatech.edu/idp/shibboleth
$IDProviders['https://idp.gatech.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.hawaii.edu/idp/shibboleth
$IDProviders['https://idp.hawaii.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.fnal.gov/idp/shibboleth
$IDProviders['https://idp.fnal.gov/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.parchment.com/idp/shibboleth
$IDProviders['https://idp.parchment.com/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp-prod.cc.ucf.edu/idp/shibboleth
$IDProviders['https://idp-prod.cc.ucf.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://fiuidp.fiu.edu/idp/shibboleth
$IDProviders['https://fiuidp.fiu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.rice.edu/idp/shibboleth
$IDProviders['https://idp.rice.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.fau.edu/idp/shibboleth
$IDProviders['https://sso.fau.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webso.iup.edu/idp/shibboleth
$IDProviders['https://webso.iup.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://certify.skidmore.edu/idp/shibboleth
$IDProviders['https://certify.skidmore.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.fortlewis.edu/idp/shibboleth
$IDProviders['https://shib.fortlewis.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.boisestate.edu/idp/shibboleth
$IDProviders['https://idp.boisestate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://fedidp.bcm.edu/idp/shibboleth
$IDProviders['https://fedidp.bcm.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth-dev-v.musc.edu/shibboleth-idp
$IDProviders['https://shibboleth-dev-v.musc.edu/shibboleth-idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibprodapp.loyola.edu/idp/shibboleth
$IDProviders['https://shibprodapp.loyola.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: urn:mace:incommon:ucsb.edu
$IDProviders['urn:mace:incommon:ucsb.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.willamette.edu/idp
$IDProviders['https://idp.willamette.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: http://login.mayo.edu/adfs/services/trust
$IDProviders['http://login.mayo.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://auth.yale.edu/idp/shibboleth
$IDProviders['https://auth.yale.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.shibboleth.ttu.edu/idp/shibboleth
$IDProviders['https://idp.shibboleth.ttu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://academica.aws.wayne.edu/saml2/trust
$IDProviders['https://academica.aws.wayne.edu/saml2/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.umt.edu/idp/shibboleth
$IDProviders['https://login.umt.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.reed.edu/idp/shibboleth
$IDProviders['https://idp.reed.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://icarus.sdstate.edu/idp/shibboleth
$IDProviders['https://icarus.sdstate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://idp.vassar.edu/saml
$IDProviders['http://idp.vassar.edu/saml'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.smu.edu/idp/shibboleth
$IDProviders['https://idp.smu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uark.edu/idp/shibboleth
$IDProviders['https://idp.uark.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib-idp.rpi.edu/idp/shibboleth
$IDProviders['https://shib-idp.rpi.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.elon.edu/idp/shibboleth
$IDProviders['https://idp.elon.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://shibboleth.bsu.edu/sso
$IDProviders['http://shibboleth.bsu.edu/sso'] = array( 'Type' => 'https://incommon.org');
//entityID: https://myid.vsc.edu/idp/shibboleth
$IDProviders['https://myid.vsc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.millersville.edu/idp/shibboleth
$IDProviders['https://idp.millersville.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.ias.edu/idp/shibboleth
$IDProviders['https://idp.ias.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.cc.lehigh.edu/sso/saml2/idp/metadata.php
$IDProviders['https://sso.cc.lehigh.edu/sso/saml2/idp/metadata.php'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.utulsa.edu/idp/shibboleth
$IDProviders['https://idp.utulsa.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.sbcc.edu/idp/shibboleth
$IDProviders['https://idp.sbcc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://caneid.miami.edu/idp/shibboleth
$IDProviders['https://caneid.miami.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://ukidp.uky.edu/idp/shibboleth
$IDProviders['https://ukidp.uky.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://oba.coppin.edu/idp/shibboleth
$IDProviders['https://oba.coppin.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.ku.edu/idp/shibboleth
$IDProviders['https://shibidp.ku.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://sts.uidaho.edu/adfs/services/trust
$IDProviders['http://sts.uidaho.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.gallaudet.edu/idp/shibboleth
$IDProviders['https://idp.gallaudet.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://cas.cgcent.miami.edu/idp/shibboleth
$IDProviders['https://cas.cgcent.miami.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth-idp.collegenet.com/idp/shibboleth
$IDProviders['https://shibboleth-idp.collegenet.com/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.wpi.edu/idp/shibboleth
$IDProviders['https://idp.wpi.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.bu.edu/idp/shibboleth
$IDProviders['https://shib.bu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.ship.edu/idp/shibboleth
$IDProviders['https://idp.ship.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.med.cornell.edu/idp/shibboleth
$IDProviders['https://shib.med.cornell.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.stthom.edu/idp/shibboleth
$IDProviders['https://idp.stthom.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.fandm.edu/idp/shibboleth
$IDProviders['https://login.fandm.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://access.research.cchmc.org/fed/idp
$IDProviders['https://access.research.cchmc.org/fed/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://unmpidp.unm.edu/idp/shibboleth
$IDProviders['https://unmpidp.unm.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.wfunet.wfu.edu/saml/saml2/idp/metadata.php
$IDProviders['https://webauth.wfunet.wfu.edu/saml/saml2/idp/metadata.php'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.nd.edu/idp/shibboleth
$IDProviders['https://login.nd.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.colby.edu/idp/shibboleth
$IDProviders['https://idp.colby.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://signin.k-state.edu/idp/shibboleth
$IDProviders['https://signin.k-state.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.towson.edu/idp/shibboleth
$IDProviders['https://shib.towson.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.ou.edu/idp/shibboleth
$IDProviders['https://shib.ou.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.unicon.net/idp/shibboleth
$IDProviders['https://idp.unicon.net/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://uisshibb1.uis.edu/idp/shibboleth
$IDProviders['https://uisshibb1.uis.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://bcadfs.bridgewater.edu/adfs/services/trust
$IDProviders['http://bcadfs.bridgewater.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.longsight.com/idp/shibboleth
$IDProviders['https://idp.longsight.com/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.niu.edu/idp/shibboleth
$IDProviders['https://idp.niu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.unt.edu/idp/shibboleth
$IDProviders['https://sso.unt.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.ligo.org/idp/shibboleth
$IDProviders['https://login.ligo.org/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://auth.creighton.edu/idp/shibboleth
$IDProviders['https://auth.creighton.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.wmich.edu/idp/shibboleth
$IDProviders['https://idp.wmich.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.syr.edu/idp/shibboleth
$IDProviders['https://shibidp.syr.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.yc.edu/idp
$IDProviders['https://sso.yc.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://auth.unomaha.edu/idp
$IDProviders['https://auth.unomaha.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.whoi.edu/idp/shibboleth
$IDProviders['https://shibidp.whoi.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sonny.furman.edu/idp
$IDProviders['https://sonny.furman.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://incommon.esu.edu/idp/shibboleth
$IDProviders['https://incommon.esu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.bloomu.edu/idp/shibboleth
$IDProviders['https://shibidp.bloomu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.is.depaul.edu/idp/shibboleth
$IDProviders['https://shib.is.depaul.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.umuc.edu/idp/shibboleth
$IDProviders['https://sso.umuc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.maine.edu/idp/shibboleth
$IDProviders['https://idp.maine.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.oar.net/idp/shibboleth
$IDProviders['https://idp.oar.net/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://gateway.capella.edu/FIM/sps/capella_saml2_idp/saml20
$IDProviders['https://gateway.capella.edu/FIM/sps/capella_saml2_idp/saml20'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.capella.edu/ic
$IDProviders['https://idp.capella.edu/ic'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.ua.edu/idp/shibboleth
$IDProviders['https://idp.ua.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.goucher.edu/idp/shibboleth
$IDProviders['https://idp.goucher.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.miracosta.edu/idp/shibboleth
$IDProviders['https://idp.miracosta.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://adfs.morgan.edu/adfs/services/trust
$IDProviders['http://adfs.morgan.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.bnl.gov/idp/shibboleth
$IDProviders['https://idp.bnl.gov/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.uwgb.edu/idp/shibboleth
$IDProviders['https://shibidp.uwgb.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.pacificu.edu/idp/shibboleth
$IDProviders['https://sso.pacificu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://sso.quinnipiac.edu/adfs/services/trust
$IDProviders['http://sso.quinnipiac.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.mtholyoke.edu/idp/shibboleth
$IDProviders['https://idp.mtholyoke.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.juilliard.edu/idp/shibboleth
$IDProviders['https://idp.juilliard.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.meredith.edu/idp/shibboleth
$IDProviders['https://webauth.meredith.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://login.ewu.edu/adfs/services/trust
$IDProviders['http://login.ewu.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.merit.edu
$IDProviders['https://idp.merit.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.rowan.edu
$IDProviders['https://login.rowan.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://fed.huit.harvard.edu/idp/shibboleth
$IDProviders['https://fed.huit.harvard.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.clarion.edu/idp
$IDProviders['https://idp.clarion.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.amherst.edu/idp/shibboleth
$IDProviders['https://shibidp.amherst.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.smith.edu/idp/shibboleth
$IDProviders['https://login.smith.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib-idp.tufts.edu/idp/shibboleth
$IDProviders['https://shib-idp.tufts.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://umshibp.olemiss.edu/idp/shibboleth
$IDProviders['https://umshibp.olemiss.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://saml.dpsnc.net/idp/shibboleth
$IDProviders['https://saml.dpsnc.net/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://secure.stevenson.edu/idp/shibboleth
$IDProviders['https://secure.stevenson.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.pace.edu/idp/shibboleth
$IDProviders['https://shibboleth.pace.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.stolaf.edu/idp/shibboleth
$IDProviders['https://login.stolaf.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://jidp.jlab.org/idp/shibboleth
$IDProviders['https://jidp.jlab.org/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.auburn.edu/idp/shibboleth
$IDProviders['https://webauth.auburn.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.bc.edu/idp/shibboleth
$IDProviders['https://login.bc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.gsu.edu/idp/shibboleth
$IDProviders['https://idp.gsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.mbl.edu/idp/shibboleth
$IDProviders['https://idp.mbl.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.bucknell.edu/idp/shibboleth
$IDProviders['https://shib.bucknell.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://id.uakron.edu/idp/shibboleth
$IDProviders['https://id.uakron.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.njit.edu/idp/shibboleth
$IDProviders['https://webauth.njit.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.lhup.edu/idp/shibboleth
$IDProviders['https://idp.lhup.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.sou.edu/idp/shibboleth
$IDProviders['https://shib.sou.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.pdx.edu/idp/shibboleth
$IDProviders['https://sso.pdx.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.its.msstate.edu/idp/shibboleth
$IDProviders['https://shibboleth.its.msstate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://neuidmsso.neu.edu/idp/shibboleth
$IDProviders['https://neuidmsso.neu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.apu.edu/shibboleth
$IDProviders['https://idp.apu.edu/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.uchastings.edu/idp/shibboleth
$IDProviders['https://shibboleth.uchastings.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.wsu.edu/idp/shibboleth
$IDProviders['https://shibidp.wsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://netid.uwosh.edu/idp/shibboleth
$IDProviders['https://netid.uwosh.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.unmc.edu/idp/shibboleth
$IDProviders['https://idp.unmc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.cccmypath.org/simplesaml/saml2/idp/metadata.php
$IDProviders['https://sso.cccmypath.org/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib-idp.siu.edu/idp/shibboleth
$IDProviders['https://shib-idp.siu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.kutztown.edu/idp/shibboleth
$IDProviders['https://idp.kutztown.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.utk.edu/idp/shibboleth
$IDProviders['https://idp.utk.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.onecampus.com/saml
$IDProviders['https://idp.onecampus.com/saml'] = array( 'Type' => 'https://incommon.org');
//entityID: https://falconidp.uwrf.edu/idp/shibboleth
$IDProviders['https://falconidp.uwrf.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.wpunj.edu/idp/shibboleth
$IDProviders['https://idp.wpunj.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.cc.uga.edu/idp/shibboleth
$IDProviders['https://idp.cc.uga.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://idp.devsnc.com/openam
$IDProviders['http://idp.devsnc.com/openam'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.lib.uh.edu/idp/shibboleth
$IDProviders['https://shibboleth.lib.uh.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://websso.pomona.edu/
$IDProviders['https://websso.pomona.edu/'] = array( 'Type' => 'https://incommon.org');
//entityID: https://singlesignon.gwu.edu/idp/shibboleth
$IDProviders['https://singlesignon.gwu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.uconn.edu/idp/shibboleth
$IDProviders['https://shibboleth.uconn.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.oregonstate.edu/idp/shibboleth
$IDProviders['https://login.oregonstate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.hamilton.edu/idp/shibboleth
$IDProviders['https://shibboleth.hamilton.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://fim.temple.edu/idp/shibboleth
$IDProviders['https://fim.temple.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.calu.edu/idp/shibboleth
$IDProviders['https://shib.calu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://adfs.sso.passhe.edu/adfs/services/trust
$IDProviders['http://adfs.sso.passhe.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.brandeis.edu/idp/shibboleth
$IDProviders['https://shibboleth.brandeis.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.marquette.edu/idp
$IDProviders['https://idp.marquette.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.wooster.edu/idp/shibboleth
$IDProviders['https://idp.wooster.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.ndsu.edu/idp/shibboleth
$IDProviders['https://idp.ndsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://auth.chaminade.edu/idp/shibboleth
$IDProviders['https://auth.chaminade.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.byu.edu/idp/shibboleth
$IDProviders['https://shib.byu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.sru.edu/idp/shibboleth
$IDProviders['https://idp.sru.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uwex.uwc.edu/idp
$IDProviders['https://idp.uwex.uwc.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.hampshire.edu/idp/shibboleth
$IDProviders['https://idp.hampshire.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.weber.edu/idp
$IDProviders['https://idp.weber.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.allegheny.edu/idp/shibboleth
$IDProviders['https://shibboleth.allegheny.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.pct.edu/idp/shibboleth
$IDProviders['https://idp.pct.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.xsede.org/idp/shibboleth
$IDProviders['https://idp.xsede.org/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://sso.davidson.edu/adfs/services/trust
$IDProviders['http://sso.davidson.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.eup.edinboro.edu/idp/shibboleth
$IDProviders['https://idp.eup.edinboro.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.cc.binghamton.edu/idp/shibboleth
$IDProviders['https://idp.cc.binghamton.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://authidp.shsu.edu/idp/shibboleth
$IDProviders['https://authidp.shsu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://judge.wcu.edu/idp/shibboleth
$IDProviders['https://judge.wcu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.wit.edu/idp/shibboleth
$IDProviders['https://shib.wit.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.mines.edu/idp/shibboleth
$IDProviders['https://idp.mines.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uaex.edu/idp/shibboleth
$IDProviders['https://idp.uaex.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.cirrusidentity.com/idp
$IDProviders['https://idp.cirrusidentity.com/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.athena-institute.net/idp
$IDProviders['https://sso.athena-institute.net/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.bates.edu/idp/shibboleth
$IDProviders['https://shibidp.bates.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.ccbcmd.edu/idp/shibboleth
$IDProviders['https://shib.ccbcmd.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.wheatonma.edu/idp/shibboleth
$IDProviders['https://shib.wheatonma.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sidp.wwu.edu/idp/shibboleth
$IDProviders['https://sidp.wwu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sid.swarthmore.edu/idp/shibboleth
$IDProviders['https://sid.swarthmore.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://sso.oit.edu/adfs/services/trust
$IDProviders['http://sso.oit.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.esc.edu/idp/shibboleth
$IDProviders['https://idp.esc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://fed.nebraska.edu/idp/shibboleth
$IDProviders['https://fed.nebraska.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.uncc.edu/idp/shibboleth
$IDProviders['https://webauth.uncc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.ccis.edu/idp/shibboleth
$IDProviders['https://sso.ccis.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.uwyo.edu/idp/shibboleth
$IDProviders['https://shibboleth.uwyo.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://thelonious.campusguard.com/idp/shibboleth
$IDProviders['https://thelonious.campusguard.com/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://fedidp.uh.edu/idp/shibboleth
$IDProviders['https://fedidp.uh.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://junebug.mcc.edu/idp/shibboleth
$IDProviders['https://junebug.mcc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.pima.edu/idp/shibboleth
$IDProviders['https://idp.pima.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.cwu.edu/idp/shibboleth
$IDProviders['https://idp.cwu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib-pprd.middleware.vt.edu
$IDProviders['https://shib-pprd.middleware.vt.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: http://adfs.msoe.edu/adfs/services/trust
$IDProviders['http://adfs.msoe.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://smidp.uwstout.edu/idp/shibboleth
$IDProviders['https://smidp.uwstout.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://wpkfl-shibidp.fullsail.com/idp/shibboleth
$IDProviders['https://wpkfl-shibidp.fullsail.com/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.uah.edu/idp/shibboleth
$IDProviders['https://sso.uah.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.drew.edu/nidp/saml2/metadata
$IDProviders['https://idp.drew.edu/nidp/saml2/metadata'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.cmc.edu/idp/shibboleth
$IDProviders['https://webauth.cmc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.montana.edu/idp/shibboleth
$IDProviders['https://login.montana.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.unlv.edu/FIM/sps/MyShib/saml20
$IDProviders['https://login.unlv.edu/FIM/sps/MyShib/saml20'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.otis.edu/idp/shibboleth
$IDProviders['https://login.otis.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.aus.edu/idp/shibboleth
$IDProviders['https://idp.aus.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://its.longwood.edu/idp
$IDProviders['https://its.longwood.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.hmc.edu/idp/shibboleth
$IDProviders['https://login.hmc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://rushib.rockefeller.edu/idp/shibboleth
$IDProviders['https://rushib.rockefeller.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.aub.edu.lb/idp/shibboleth
$IDProviders['https://idp.aub.edu.lb/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://identity.gettysburg.edu/idp/shibboleth
$IDProviders['https://identity.gettysburg.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: http://adfs.philau.edu/adfs/services/trust
$IDProviders['http://adfs.philau.edu/adfs/services/trust'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.tamucc.edu/idp/shibboleth
$IDProviders['https://idp.tamucc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib1.uwplatt.edu/idp/shibboleth
$IDProviders['https://shib1.uwplatt.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.pugetsound.edu/idp/shibboleth
$IDProviders['https://idp.pugetsound.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.kenyon.edu/idp/shibboleth
$IDProviders['https://sso.kenyon.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.broadinstitute.org/idp/shibboleth
$IDProviders['https://idp.broadinstitute.org/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://passport.ucdenver.edu/oam/fed
$IDProviders['https://passport.ucdenver.edu/oam/fed'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shfed.augusta.edu/idp/shibboleth
$IDProviders['https://shfed.augusta.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.radford.edu/idp/shibboleth
$IDProviders['https://idp.radford.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.mcw.edu/idp/shibboleth
$IDProviders['https://shib.mcw.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.wvu.edu/idp/shibboleth
$IDProviders['https://idp.wvu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://alumidp.princeton.edu/idp/shibboleth
$IDProviders['https://alumidp.princeton.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.cuc.claremont.edu/idp/shibboleth
$IDProviders['https://webauth.cuc.claremont.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.twu.edu/idp/shibboleth
$IDProviders['https://shibboleth.twu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.uvu.edu/idp/shibboleth
$IDProviders['https://shib.uvu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.salisbury.edu/idp/shibboleth
$IDProviders['https://shibboleth.salisbury.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.marshall.edu/idp/shibboleth
$IDProviders['https://idp.marshall.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.umes.edu/idp/shibboleth
$IDProviders['https://sso.umes.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sm-prd11.ucollaborate.net/oam/fed
$IDProviders['https://sm-prd11.ucollaborate.net/oam/fed'] = array( 'Type' => 'https://incommon.org');
//entityID: https://heimdall.comodo.net/idp/shibboleth
$IDProviders['https://heimdall.comodo.net/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth-prod.rider.edu/idp/shibboleth
$IDProviders['https://shibboleth-prod.rider.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.haverford.edu/idp/shibboleth
$IDProviders['https://idp.haverford.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://incommon.sunycnse.com/idp/shibboleth
$IDProviders['https://incommon.sunycnse.com/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://cumin.plu.edu/idp/shibboleth
$IDProviders['https://cumin.plu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://saml.nelnet.net
$IDProviders['https://saml.nelnet.net'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.qatar-weill.cornell.edu/idp/shibboleth
$IDProviders['https://idp.qatar-weill.cornell.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://saml.adu.edu
$IDProviders['https://saml.adu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.delval.edu/idp
$IDProviders['https://sso.delval.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.bridgeport.edu/idp/shibboleth
$IDProviders['https://idp.bridgeport.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.brockport.edu/idp/shibboleth
$IDProviders['https://sso.brockport.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.4cd.edu/idp/shibboleth
$IDProviders['https://idp.4cd.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://mycomidp.marin.edu
$IDProviders['https://mycomidp.marin.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.vcccd.edu/idp/shibboleth
$IDProviders['https://shib.vcccd.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.smc.edu/idp/shibboleth
$IDProviders['https://idp.smc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.brynmawr.edu/idp/shibboleth
$IDProviders['https://idp.brynmawr.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibboleth.louisville.edu/idp
$IDProviders['https://shibboleth.louisville.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uwf.edu/idp/shibboleth
$IDProviders['https://idp.uwf.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://duo.emerson.edu/dag/saml2/idp/metadata.php
$IDProviders['https://duo.emerson.edu/dag/saml2/idp/metadata.php'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.macalester.edu/openathens
$IDProviders['https://idp.macalester.edu/openathens'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.sjeccd.edu
$IDProviders['https://sso.sjeccd.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://hartnell.edu/idp
$IDProviders['https://hartnell.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://cas.conncoll.edu/idp/shibboleth
$IDProviders['https://cas.conncoll.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://auth.cuesta.edu/idp/shibboleth
$IDProviders['https://auth.cuesta.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.icermali.org/idp/shibboleth
$IDProviders['https://login.icermali.org/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.iceruganda.org/idp/shibboleth
$IDProviders['https://login.iceruganda.org/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.cmccd.edu/idp/shibboleth
$IDProviders['https://idp.cmccd.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.mtsac.edu/idp/shibboleth
$IDProviders['https://idp.mtsac.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://eidp.llnl.gov
$IDProviders['https://eidp.llnl.gov'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.ithaca.edu/idp/shibboleth
$IDProviders['https://login.ithaca.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibidp.wcupa.edu/idp/shibboleth
$IDProviders['https://shibidp.wcupa.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.scrippscollege.edu/idp/shibboleth
$IDProviders['https://webauth.scrippscollege.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idmpg.palomar.edu
$IDProviders['https://idmpg.palomar.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.huc.edu/idp/shibboleth
$IDProviders['https://idp.huc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.utrgv.edu/idp/shibboleth
$IDProviders['https://idp.utrgv.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.umassd.edu/idp/shibboleth
$IDProviders['https://idp.umassd.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.gc.cuny.edu/idp/shibboleth
$IDProviders['https://sso.gc.cuny.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib1.coastal.edu/idp/shibboleth
$IDProviders['https://shib1.coastal.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.lit.edu/simplesamlidp/saml2/idp/metadata.php
$IDProviders['https://idp.lit.edu/simplesamlidp/saml2/idp/metadata.php'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.williams.edu/idp/shibboleth
$IDProviders['https://idp.williams.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.sulross.edu/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.sulross.edu/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.uilabs.org/idp
$IDProviders['https://idp.uilabs.org/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://passport-dev.pitt.edu/idp/shibboleth
$IDProviders['https://passport-dev.pitt.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://auth.it.marist.edu/idp
$IDProviders['https://auth.it.marist.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://myidp.nmsu.edu
$IDProviders['https://myidp.nmsu.edu'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.tcu.edu/idp
$IDProviders['https://idp.tcu.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.ltcc.edu/idp/shibboleth
$IDProviders['https://idp.ltcc.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.nccu.edu/idp/shibboleth
$IDProviders['https://idp.nccu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.stmarys-ca.edu/idp/shibboleth
$IDProviders['https://idp.stmarys-ca.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.cccd.edu/idp/shibboleth
$IDProviders['https://idp.cccd.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.ncsa.illinois.edu/idp/shibboleth
$IDProviders['https://idp.ncsa.illinois.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.marymount.edu/idp/shibboleth
$IDProviders['https://shib.marymount.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.elcamino.edu/idp/shibboleth
$IDProviders['https://idp.elcamino.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.malone.edu/idp/shibboleth
$IDProviders['https://idp.malone.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.ung.edu/simplesaml2
$IDProviders['https://sso.ung.edu/simplesaml2'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.mansfield.edu/idp/shibboleth
$IDProviders['https://sso.mansfield.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.touro.edu/idp/shibboleth
$IDProviders['https://idp.touro.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://auth.dickinson.edu/idp/shibboleth
$IDProviders['https://auth.dickinson.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shib.wichita.edu/idp/shibboleth
$IDProviders['https://shib.wichita.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.bshp.edu/idp/shibboleth
$IDProviders['https://idp.bshp.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.union.edu/idp/shibboleth
$IDProviders['https://sso.union.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.ohlone.edu/idp/shibboleth
$IDProviders['https://login.ohlone.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://shibb.its.appstate.edu/idp/shibboleth
$IDProviders['https://shibb.its.appstate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.usm.edu/idp/shibboleth
$IDProviders['https://idp.usm.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.citruscollege.edu/idp/shibboleth
$IDProviders['https://idp.citruscollege.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://identity.colgate.edu/idp/shibboleth
$IDProviders['https://identity.colgate.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.cgu.edu/idp/shibboleth
$IDProviders['https://webauth.cgu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.kgi.edu/idp/shibboleth
$IDProviders['https://webauth.kgi.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.pitzer.edu/idp/shibboleth
$IDProviders['https://webauth.pitzer.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.scu.edu/idp/shibboleth
$IDProviders['https://login.scu.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.duq.edu/idp/shibboleth
$IDProviders['https://idp.duq.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.getty.edu/idp
$IDProviders['https://idp.getty.edu/idp'] = array( 'Type' => 'https://incommon.org');
//entityID: https://sso.oakland.edu/idp/shibboleth
$IDProviders['https://sso.oakland.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://idp.grinnell.edu/idp/shibboleth
$IDProviders['https://idp.grinnell.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://aaidp.academicanalytics.com/idp/shibboleth
$IDProviders['https://aaidp.academicanalytics.com/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://login.nyumc.org/idp/shibboleth
$IDProviders['https://login.nyumc.org/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');
//entityID: https://webauth.northern.edu/idp/shibboleth
$IDProviders['https://webauth.northern.edu/idp/shibboleth'] = array( 'Type' => 'https://incommon.org');

$IDProviders['https://www.gakunin.jp'] = array ( 'Type' => 'category', 'Name' => 'GakuNin');
//entityID: https://idp.nii.ac.jp/idp/shibboleth
$IDProviders['https://idp.nii.ac.jp/idp/shibboleth'] = array( 'Type' => 'https://www.gakunin.jp');
//entityID: https://upki.yamagata-u.ac.jp/idp/shibboleth
$IDProviders['https://upki.yamagata-u.ac.jp/idp/shibboleth'] = array( 'Type' => 'https://www.gakunin.jp');
//entityID: https://idp.gakunin.nii.ac.jp/idp/shibboleth
$IDProviders['https://idp.gakunin.nii.ac.jp/idp/shibboleth'] = array( 'Type' => 'https://www.gakunin.jp');
//entityID: https://gakunin-idp.c.chuo-u.ac.jp/idp/shibboleth
$IDProviders['https://gakunin-idp.c.chuo-u.ac.jp/idp/shibboleth'] = array( 'Type' => 'https://www.gakunin.jp');
//entityID: https://idp.cis.kit.ac.jp/idp/shibboleth
$IDProviders['https://idp.cis.kit.ac.jp/idp/shibboleth'] = array( 'Type' => 'https://www.gakunin.jp');

$IDProviders['https://fedi.litnet.lt'] = array ( 'Type' => 'category', 'Name' => 'LITNET FEDI');
//entityID: https://login.ktu.lt/simplesaml/saml2/idp/metadata.php
$IDProviders['https://login.ktu.lt/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://login.utenos-kolegija.lt/SAML/IdP
$IDProviders['https://login.utenos-kolegija.lt/SAML/IdP'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://sso.vgtu.lt/saml2/idp/metadata.php
$IDProviders['https://sso.vgtu.lt/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://login.vu.lt/SSO/saml2/idp/metadata.php
$IDProviders['https://login.vu.lt/SSO/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://login.asu.lt/simplesaml/saml2/idp/metadata.php
$IDProviders['https://login.asu.lt/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://id.viko.lt/auth/saml2/idp/metadata.php
$IDProviders['https://id.viko.lt/auth/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://sso.lajm.lt/saml2/idp/metadata.php
$IDProviders['https://sso.lajm.lt/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://login.lmta.lt/saml2/idp/metadata.php
$IDProviders['https://login.lmta.lt/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://lsu.sso.litnet.lt/auth/saml2/idp/metadata.php
$IDProviders['https://lsu.sso.litnet.lt/auth/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://ism.sso.litnet.lt/auth/saml2/idp/metadata.php
$IDProviders['https://ism.sso.litnet.lt/auth/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://vdu.sso.litnet.lt/auth/saml2/idp/metadata.php
$IDProviders['https://vdu.sso.litnet.lt/auth/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://login.kvk.lt/simplesaml/saml2/idp/metadata.php
$IDProviders['https://login.kvk.lt/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://fedi.ku.lt/idp/shibboleth
$IDProviders['https://fedi.ku.lt/idp/shibboleth'] = array( 'Type' => 'https://fedi.litnet.lt');
//entityID: https://login.mruni.eu/sso/saml2/idp/metadata.php
$IDProviders['https://login.mruni.eu/sso/saml2/idp/metadata.php'] = array( 'Type' => 'https://fedi.litnet.lt');

$IDProviders['https://minga.cedia.org.ec'] = array ( 'Type' => 'category', 'Name' => 'MINGA');
//entityID: https://login.cedia.org.ec
$IDProviders['https://login.cedia.org.ec'] = array( 'Type' => 'https://minga.cedia.org.ec');
//entityID: https://idp.ucuenca.edu.ec/idp/shibboleth
$IDProviders['https://idp.ucuenca.edu.ec/idp/shibboleth'] = array( 'Type' => 'https://minga.cedia.org.ec');

$IDProviders['http://colfire.co'] = array ( 'Type' => 'category', 'Name' => 'COLFIRE');
//entityID: https://idp.renata.edu.co/idp/shibboleth
$IDProviders['https://idp.renata.edu.co/idp/shibboleth'] = array( 'Type' => 'http://colfire.co');

$IDProviders['http://iif.iucc.ac.il'] = array ( 'Type' => 'category', 'Name' => 'IUCC Identity Federation');
//entityID: https://iif.iucc.ac.il/idp/saml2/idp/metadata.php
$IDProviders['https://iif.iucc.ac.il/idp/saml2/idp/metadata.php'] = array( 'Type' => 'http://iif.iucc.ac.il');

$IDProviders['http://taat.edu.ee'] = array ( 'Type' => 'category', 'Name' => 'TAAT');
//entityID: https://auth.ut.ee/idp/saml2/idp/metadata.php
$IDProviders['https://auth.ut.ee/idp/saml2/idp/metadata.php'] = array( 'Type' => 'http://taat.edu.ee');
//entityID: https://memm.hep.kbfi.ee/saml2/idp/metadata.php
$IDProviders['https://memm.hep.kbfi.ee/saml2/idp/metadata.php'] = array( 'Type' => 'http://taat.edu.ee');
//entityID: https://passwd.tlu.ee/taatauth/saml2/idp/metadata.php
$IDProviders['https://passwd.tlu.ee/taatauth/saml2/idp/metadata.php'] = array( 'Type' => 'http://taat.edu.ee');
//entityID: https://tktk.ois.ee/simplesamlphp/saml2/idp/metadata.php
$IDProviders['https://tktk.ois.ee/simplesamlphp/saml2/idp/metadata.php'] = array( 'Type' => 'http://taat.edu.ee');
//entityID: https://sisekaitse.ois.ee/simplesamlphp/saml2/idp/metadata.php
$IDProviders['https://sisekaitse.ois.ee/simplesamlphp/saml2/idp/metadata.php'] = array( 'Type' => 'http://taat.edu.ee');
//entityID: https://www.eki.ee/simplesamlphp/saml2/idp/metadata.php
$IDProviders['https://www.eki.ee/simplesamlphp/saml2/idp/metadata.php'] = array( 'Type' => 'http://taat.edu.ee');
//entityID: https://eenet.harid.ee/sso/saml2/idp/metadata.php
$IDProviders['https://eenet.harid.ee/sso/saml2/idp/metadata.php'] = array( 'Type' => 'http://taat.edu.ee');

$IDProviders['https://peano.uran.ua'] = array ( 'Type' => 'category', 'Name' => 'PEANO');
//entityID: https://idp.uran.ua/idp/shibboleth
$IDProviders['https://idp.uran.ua/idp/shibboleth'] = array( 'Type' => 'https://peano.uran.ua');
//entityID: https://idp.kpi.ua/simplesaml/saml2/idp/metadata.php
$IDProviders['https://idp.kpi.ua/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://peano.uran.ua');

$IDProviders['https://www.fccn.pt'] = array ( 'Type' => 'category', 'Name' => 'RCTSaai');
//entityID: https://si-saai.ualg.pt/idp/shibboleth
$IDProviders['https://si-saai.ualg.pt/idp/shibboleth'] = array( 'Type' => 'https://www.fccn.pt');
//entityID: https://idp.fccn.pt/idp/shibboleth
$IDProviders['https://idp.fccn.pt/idp/shibboleth'] = array( 'Type' => 'https://www.fccn.pt');
//entityID: https://aai.uevora.pt/idp/shibboleth
$IDProviders['https://aai.uevora.pt/idp/shibboleth'] = array( 'Type' => 'https://www.fccn.pt');
//entityID: https://idp.iscte-iul.pt/idp/shibboleth
$IDProviders['https://idp.iscte-iul.pt/idp/shibboleth'] = array( 'Type' => 'https://www.fccn.pt');
//entityID: https://idprovider.uab.pt/idp/shibboleth
$IDProviders['https://idprovider.uab.pt/idp/shibboleth'] = array( 'Type' => 'https://www.fccn.pt');
//entityID: https://idpesenfc.esenfc.pt/idp/shibboleth
$IDProviders['https://idpesenfc.esenfc.pt/idp/shibboleth'] = array( 'Type' => 'https://www.fccn.pt');
//entityID: https://idp.lip.pt/idp/shibboleth
$IDProviders['https://idp.lip.pt/idp/shibboleth'] = array( 'Type' => 'https://www.fccn.pt');
//entityID: https://id.tecnico.ulisboa.pt/saml
$IDProviders['https://id.tecnico.ulisboa.pt/saml'] = array( 'Type' => 'https://www.fccn.pt');

$IDProviders['http://eduid.lu'] = array ( 'Type' => 'category', 'Name' => 'eduID Luxembourg');
//entityID: https://clueless.restena.lu/simplesamlphp/saml2/idp/metadata.php
$IDProviders['https://clueless.restena.lu/simplesamlphp/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.lu');
//entityID: https://id.uni.lu/simplesaml/saml2/idp/metadata.php
$IDProviders['https://id.uni.lu/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.lu');
//entityID: https://login.restena.lu/simplesamlphp/saml2/idp/metadata.php
$IDProviders['https://login.restena.lu/simplesamlphp/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.lu');
//entityID: https://ssl.education.lu/saml/saml2/idp/metadata.php
$IDProviders['https://ssl.education.lu/saml/saml2/idp/metadata.php'] = array( 'Type' => 'http://eduid.lu');

$IDProviders['https://mtd.gif.grena.ge'] = array ( 'Type' => 'category', 'Name' => 'Grena Identity Federation');
//entityID: https://idp.grena.ge/saml2/idp/metadata.php
$IDProviders['https://idp.grena.ge/saml2/idp/metadata.php'] = array( 'Type' => 'https://mtd.gif.grena.ge');
//entityID: https://idp.sciencelib.ge/saml2/idp/metadata.php
$IDProviders['https://idp.sciencelib.ge/saml2/idp/metadata.php'] = array( 'Type' => 'https://mtd.gif.grena.ge');

$IDProviders['https://aai.asnet.am'] = array ( 'Type' => 'category', 'Name' => 'AFIRE');
//entityID: https://afire.asnet.am/idp/shibboleth
$IDProviders['https://afire.asnet.am/idp/shibboleth'] = array( 'Type' => 'https://aai.asnet.am');

$IDProviders['http://federations.renam.md/'] = array ( 'Type' => 'category', 'Name' => 'LEAF');
//entityID: https://idp.vle.ase.md/saml/saml2/idp/metadata.php
$IDProviders['https://idp.vle.ase.md/saml/saml2/idp/metadata.php'] = array( 'Type' => 'http://federations.renam.md/');
//entityID: https://gidp.federations.renam.md
$IDProviders['https://gidp.federations.renam.md'] = array( 'Type' => 'http://federations.renam.md/');

$IDProviders['https://aaf.edu.au'] = array ( 'Type' => 'category', 'Name' => 'AAF');
//entityID: https://idpp1.curtin.edu.au/idp/shibboleth
$IDProviders['https://idpp1.curtin.edu.au/idp/shibboleth'] = array( 'Type' => 'https://aaf.edu.au');
//entityID: https://idp.flinders.edu.au/idp/shibboleth
$IDProviders['https://idp.flinders.edu.au/idp/shibboleth'] = array( 'Type' => 'https://aaf.edu.au');
//entityID: https://idp.newcastle.edu.au/idp/shibboleth
$IDProviders['https://idp.newcastle.edu.au/idp/shibboleth'] = array( 'Type' => 'https://aaf.edu.au');
//entityID: urn:mace:federation.org.au:testfed:uq.edu.au
$IDProviders['urn:mace:federation.org.au:testfed:uq.edu.au'] = array( 'Type' => 'https://aaf.edu.au');
//entityID: https://aaf1-idp.its.utas.edu.au/idp/shibboleth
$IDProviders['https://aaf1-idp.its.utas.edu.au/idp/shibboleth'] = array( 'Type' => 'https://aaf.edu.au');
//entityID: https://vho.aaf.edu.au/idp/shibboleth
$IDProviders['https://vho.aaf.edu.au/idp/shibboleth'] = array( 'Type' => 'https://aaf.edu.au');

$IDProviders['http://kafe.kreonet.net'] = array ( 'Type' => 'category', 'Name' => 'KAFE');
//entityID: https://coreen-idp.kreonet.net/idp/simplesamlphp
$IDProviders['https://coreen-idp.kreonet.net/idp/simplesamlphp'] = array( 'Type' => 'http://kafe.kreonet.net');
//entityID: https://idpass.postech.ac.kr/idp/simplesamlphp
$IDProviders['https://idpass.postech.ac.kr/idp/simplesamlphp'] = array( 'Type' => 'http://kafe.kreonet.net');
//entityID: https://iam.kisti.re.kr/idp/simplesamlphp
$IDProviders['https://iam.kisti.re.kr/idp/simplesamlphp'] = array( 'Type' => 'http://kafe.kreonet.net');

$IDProviders['https://rr.aaiedu.mk'] = array ( 'Type' => 'category', 'Name' => 'AAIEduMk');
//entityID: https://idp.ukim.mk/idp/shibboleth
$IDProviders['https://idp.ukim.mk/idp/shibboleth'] = array( 'Type' => 'https://rr.aaiedu.mk');

$IDProviders['https://safire.ac.za'] = array ( 'Type' => 'category', 'Name' => 'SAFIRE');
//entityID: https://iziko.safire.ac.za/
$IDProviders['https://iziko.safire.ac.za/'] = array( 'Type' => 'https://safire.ac.za');
//entityID: http://proxy.safire.ac.za/birk.php/federation.ukzn.ac.za/adfs/services/trust
$IDProviders['http://proxy.safire.ac.za/birk.php/federation.ukzn.ac.za/adfs/services/trust'] = array( 'Type' => 'https://safire.ac.za');
//entityID: https://proxy.safire.ac.za/birk.php/idp.csir.co.za/simplesamlphp/saml2/idp/metadata.php
$IDProviders['https://proxy.safire.ac.za/birk.php/idp.csir.co.za/simplesamlphp/saml2/idp/metadata.php'] = array( 'Type' => 'https://safire.ac.za');
//entityID: https://proxy.safire.ac.za/birk.php/srvslsfed001.uct.ac.za/simplesaml/saml2/idp/metadata.php
$IDProviders['https://proxy.safire.ac.za/birk.php/srvslsfed001.uct.ac.za/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://safire.ac.za');
//entityID: https://proxy.safire.ac.za/birk.php/googleidp.sanren.ac.za/simplesaml/saml2/idp/metadata.php
$IDProviders['https://proxy.safire.ac.za/birk.php/googleidp.sanren.ac.za/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://safire.ac.za');
//entityID: https://proxy.safire.ac.za/birk.php/saml.uwc.ac.za/simplesaml/saml2/idp/metadata.php
$IDProviders['https://proxy.safire.ac.za/birk.php/saml.uwc.ac.za/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://safire.ac.za');
//entityID: http://proxy.safire.ac.za/birk.php/federate.sun.ac.za/adfs/services/trust
$IDProviders['http://proxy.safire.ac.za/birk.php/federate.sun.ac.za/adfs/services/trust'] = array( 'Type' => 'https://safire.ac.za');
//entityID: https://proxy.safire.ac.za/birk.php/idp-01.tenet.ac.za/idp/shibboleth
$IDProviders['https://proxy.safire.ac.za/birk.php/idp-01.tenet.ac.za/idp/shibboleth'] = array( 'Type' => 'https://safire.ac.za');
//entityID: https://proxy.safire.ac.za/birk.php/shib.nwu.ac.za/idp/shibboleth
$IDProviders['https://proxy.safire.ac.za/birk.php/shib.nwu.ac.za/idp/shibboleth'] = array( 'Type' => 'https://safire.ac.za');
//entityID: https://proxy.safire.ac.za/birk.php/nmmusaml-sc1.nmmu.ac.za/simplesaml/saml2/idp/metadata.php
$IDProviders['https://proxy.safire.ac.za/birk.php/nmmusaml-sc1.nmmu.ac.za/simplesaml/saml2/idp/metadata.php'] = array( 'Type' => 'https://safire.ac.za');

$IDProviders['https://febas.basnet.by'] = array ( 'Type' => 'category', 'Name' => 'FEBAS');
//entityID: https://febas.basnet.by/idp/shibboleth
$IDProviders['https://febas.basnet.by/idp/shibboleth'] = array( 'Type' => 'https://febas.basnet.by');
//entityID: https://febas.basnet.by/idpbasnet/saml2/idp/metadata.php
$IDProviders['https://febas.basnet.by/idpbasnet/saml2/idp/metadata.php'] = array( 'Type' => 'https://febas.basnet.by');

$IDProviders['http://inflibnet.ac.in'] = array ( 'Type' => 'category', 'Name' => 'INFED');
//entityID: https://idp.inflibnet.ac.in/idp/shibboleth
$IDProviders['https://idp.inflibnet.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://parichay.inflibnet.ac.in/idp/shibboleth
$IDProviders['https://parichay.inflibnet.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://infonet.inflibnet.ac.in/idp/shibboleth
$IDProviders['https://infonet.inflibnet.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.mkuniversity.org/idp/shibboleth
$IDProviders['https://idp.mkuniversity.org/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.aud.ac.in/idp/shibboleth
$IDProviders['https://idp.aud.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.iima.ac.in/idp/shibboleth
$IDProviders['https://idp.iima.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.nluo.ac.in/idp/shibboleth
$IDProviders['https://idp.nluo.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.vidyasagar.ac.in/idp/shibboleth
$IDProviders['https://idp.vidyasagar.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://libkey.iitg.ac.in/idp/shibboleth
$IDProviders['https://libkey.iitg.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.bdu.ac.in/idp/shibboleth
$IDProviders['https://idp.bdu.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.cutn.ac.in/idp/shibboleth
$IDProviders['https://idp.cutn.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.sau.int/idp/shibboleth
$IDProviders['https://idp.sau.int/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.unishivaji.ac.in/idp/shibboleth
$IDProviders['https://idp.unishivaji.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.bvuict.in/idp/shibboleth
$IDProviders['https://idp.bvuict.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');
//entityID: https://idp.ruralunivlibrary.ac.in/idp/shibboleth
$IDProviders['https://idp.ruralunivlibrary.ac.in/idp/shibboleth'] = array( 'Type' => 'http://inflibnet.ac.in');

$IDProviders['https://home.trc.gov.om'] = array ( 'Type' => 'category', 'Name' => 'Oman KID');
//entityID: https://idp.trc.gov.om/idp/shibboleth
$IDProviders['https://idp.trc.gov.om/idp/shibboleth'] = array( 'Type' => 'https://home.trc.gov.om');
//entityID: https://trcfed.trc.gov.om/idp/shibboleth
$IDProviders['https://trcfed.trc.gov.om/idp/shibboleth'] = array( 'Type' => 'https://home.trc.gov.om');

$IDProviders['https://www.aai.arn.dz/'] = array ( 'Type' => 'category', 'Name' => 'ARNaai');
//entityID: https://idp.grid.arn.dz/idp/shibboleth
$IDProviders['https://idp.grid.arn.dz/idp/shibboleth'] = array( 'Type' => 'https://www.aai.arn.dz/');

$IDProviders['https://www.renu.ac.ug'] = array ( 'Type' => 'category', 'Name' => 'RIF');
//entityID: https://idp.renu.ac.ug/shibboleth
$IDProviders['https://idp.renu.ac.ug/shibboleth'] = array( 'Type' => 'https://www.renu.ac.ug');

//Overwrite the LandSense IdPs as they do not have any registration info and would be listed as 'others' otherwise
$IDProviders['https://idp.geo-wiki.org/idp/shibboleth'] = array( 'Type' => 'landsense');
$IDProviders['https://idp-landsense.ign.fr/idp/shibboleth'] = array( 'Type' => 'landsense');
$IDProviders['https://idp.landsense.seo.org/idp/shibboleth'] = array( 'Type' => 'landsense');
$IDProviders['https://idp.landsense.secure-dimensions.de/idp/shibboleth'] = array( 'Type' => 'landsense');
$IDProviders['https://landsense-idp.geopedia.world/idp/shibboleth'] = array( 'Type' => 'landsense');
$IDProviders['https://landsense.inosens.rs/idp/shibboleth'] = array( 'Type' => 'landsense');
$IDProviders['https://social-idp.landsense.eu/simplesaml/saml2/idp/facebook'] = array( 'Type' => 'social');
$IDProviders['https://social-idp.landsense.eu/simplesaml/saml2/idp/google'] = array( 'Type' => 'social');
?>
