<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata[getenv('SIMPLESAMLPHP_SP_ENTITY_ID')] = array(
    'AssertionConsumerService' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
    'SingleLogoutService' => getenv('SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE'),
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',

    // refer to https://simplesamlphp.org/docs/stable/saml:nameid
    'authproc' => array(
        3 => array(
            'class' => 'saml:AttributeNameID',
            'attribute' => 'email',
            'Format' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
        ),
    ),
);
