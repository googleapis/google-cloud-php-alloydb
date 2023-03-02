<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/alloydb/v1beta/service.proto

namespace Google\Cloud\AlloyDb\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for requests to generate a client certificate signed by the Cluster
 * CA.
 *
 * Generated from protobuf message <code>google.cloud.alloydb.v1beta.GenerateClientCertificateRequest</code>
 */
class GenerateClientCertificateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent resource. The required format is:
     *  * projects/{project}/locations/{location}/clusters/{cluster}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. A pem-encoded X.509 certificate signing request (CSR).
     *
     * Generated from protobuf field <code>string pem_csr = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $pem_csr = '';
    /**
     * Optional. An optional hint to the endpoint to generate the client
     * certificate with the requested duration. The duration can be from 1 hour to
     * 24 hours. The endpoint may or may not honor the hint. If the hint is left
     * unspecified or is not honored, then the endpoint will pick an appropriate
     * default duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cert_duration = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cert_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent resource. The required format is:
     *            * projects/{project}/locations/{location}/clusters/{cluster}
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes after the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type string $pem_csr
     *           Optional. A pem-encoded X.509 certificate signing request (CSR).
     *     @type \Google\Protobuf\Duration $cert_duration
     *           Optional. An optional hint to the endpoint to generate the client
     *           certificate with the requested duration. The duration can be from 1 hour to
     *           24 hours. The endpoint may or may not honor the hint. If the hint is left
     *           unspecified or is not honored, then the endpoint will pick an appropriate
     *           default duration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Alloydb\V1Beta\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent resource. The required format is:
     *  * projects/{project}/locations/{location}/clusters/{cluster}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent resource. The required format is:
     *  * projects/{project}/locations/{location}/clusters/{cluster}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. A pem-encoded X.509 certificate signing request (CSR).
     *
     * Generated from protobuf field <code>string pem_csr = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPemCsr()
    {
        return $this->pem_csr;
    }

    /**
     * Optional. A pem-encoded X.509 certificate signing request (CSR).
     *
     * Generated from protobuf field <code>string pem_csr = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPemCsr($var)
    {
        GPBUtil::checkString($var, True);
        $this->pem_csr = $var;

        return $this;
    }

    /**
     * Optional. An optional hint to the endpoint to generate the client
     * certificate with the requested duration. The duration can be from 1 hour to
     * 24 hours. The endpoint may or may not honor the hint. If the hint is left
     * unspecified or is not honored, then the endpoint will pick an appropriate
     * default duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cert_duration = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getCertDuration()
    {
        return $this->cert_duration;
    }

    public function hasCertDuration()
    {
        return isset($this->cert_duration);
    }

    public function clearCertDuration()
    {
        unset($this->cert_duration);
    }

    /**
     * Optional. An optional hint to the endpoint to generate the client
     * certificate with the requested duration. The duration can be from 1 hour to
     * 24 hours. The endpoint may or may not honor the hint. If the hint is left
     * unspecified or is not honored, then the endpoint will pick an appropriate
     * default duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cert_duration = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCertDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->cert_duration = $var;

        return $this;
    }

}

