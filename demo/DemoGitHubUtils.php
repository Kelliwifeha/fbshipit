<?hh // strict
/**
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 * @format
 */

namespace Facebook\ShipIt;

final class DemoGitHubUtils extends ShipItGitHubUtils {

  static string $committerName = "FBShipIt Demo Committer";
  static string $committerUser = 'CHANGEME';
  static string $committerEmail = "demo@example.com";

  <<__Override>>
  public static async function genCredentialsForProject(
    string $org,
    string $proj,
  ): Awaitable<ShipItGitHubCredentials> {
    return shape(
      'name' => self::$committerName,
      'user' => self::$committerUser,
      'email' => self::$committerEmail,
      'access_token' => 'ACCESS_TOKEN_HERE',
      'password' => null,
    );
  }
}
