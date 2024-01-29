<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Safebrowsing\Resource;

use Google\Service\Safebrowsing\GoogleSecuritySafebrowsingV4FindFullHashesResponse;

/**
 * The "encodedFullHashes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $safebrowsingService = new Google\Service\Safebrowsing(...);
 *   $encodedFullHashes = $safebrowsingService->encodedFullHashes;
 *  </code>
 */
class EncodedFullHashes extends \Google\Service\Resource
{
  /**
   * (encodedFullHashes.get)
   *
   * @param string $encodedRequest A serialized FindFullHashesRequest proto.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientId A client ID that (hopefully) uniquely identifies
   * the client implementation of the Safe Browsing API.
   * @opt_param string clientVersion The version of the client implementation.
   * @return GoogleSecuritySafebrowsingV4FindFullHashesResponse
   * @throws \Google\Service\Exception
   */
  public function get($encodedRequest, $optParams = [])
  {
    $params = ['encodedRequest' => $encodedRequest];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleSecuritySafebrowsingV4FindFullHashesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EncodedFullHashes::class, 'Google_Service_Safebrowsing_Resource_EncodedFullHashes');
