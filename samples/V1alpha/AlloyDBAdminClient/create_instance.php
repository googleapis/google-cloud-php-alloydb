<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START alloydb_v1alpha_generated_AlloyDBAdmin_CreateInstance_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\AlloyDb\V1alpha\AlloyDBAdminClient;
use Google\Cloud\AlloyDb\V1alpha\Instance;
use Google\Cloud\AlloyDb\V1alpha\Instance\InstanceType;
use Google\Rpc\Status;

/**
 * Creates a new Instance in a given project and location.
 *
 * @param string $formattedParent      The name of the parent resource. For the required format, see the
 *                                     comment on the Instance.name field. Please see
 *                                     {@see AlloyDBAdminClient::clusterName()} for help formatting this field.
 * @param string $instanceId           ID of the requesting object.
 * @param int    $instanceInstanceType The type of the instance. Specified at creation time.
 */
function create_instance_sample(
    string $formattedParent,
    string $instanceId,
    int $instanceInstanceType
): void {
    // Create a client.
    $alloyDBAdminClient = new AlloyDBAdminClient();

    // Prepare the request message.
    $instance = (new Instance())
        ->setInstanceType($instanceInstanceType);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $alloyDBAdminClient->createInstance($formattedParent, $instanceId, $instance);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var Instance $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = AlloyDBAdminClient::clusterName('[PROJECT]', '[LOCATION]', '[CLUSTER]');
    $instanceId = '[INSTANCE_ID]';
    $instanceInstanceType = InstanceType::INSTANCE_TYPE_UNSPECIFIED;

    create_instance_sample($formattedParent, $instanceId, $instanceInstanceType);
}
// [END alloydb_v1alpha_generated_AlloyDBAdmin_CreateInstance_sync]
