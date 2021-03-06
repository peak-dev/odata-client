<?php
/**
 * OData client library
 *
 * @author  Михаил Красильников <m.krasilnikov@yandex.ru>
 * @license MIT
 */
namespace Mekras\OData\Client;

/**
 * OData constants.
 */
class OData
{
    /**
     * OData method: get resource.
     */
    const GET = 'GET';

    /**
     * OData method: create resource.
     */
    const CREATE = 'POST';

    /**
     * OData method: update resource.
     */
    const UPDATE = 'PUT';

    /**
     * OData method: delete resource.
     */
    const DELETE = 'DELETE';
    
    /* XML namespaces */
    const DATA = 'http://schemas.microsoft.com/ado/2007/08/dataservices';
    const META = 'http://schemas.microsoft.com/ado/2007/08/dataservices/metadata';
    const SCHEME = 'http://schemas.microsoft.com/ado/2007/08/dataservices/scheme';
    const RELATED = 'http://schemas.microsoft.com/ado/2007/08/dataservices/related';
}
