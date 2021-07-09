<?php

namespace Drupal\graphql_webform\Plugin\GraphQL\Types;

use Drupal\graphql\GraphQL\Execution\ResolveContext;
use Drupal\graphql\Plugin\GraphQL\Types\TypePluginBase;
use Drupal\graphql_webform\GraphQL\WebformSubmissionErrorWrapper as WebformSubmissionErrorWrapperDataObject;
use GraphQL\Type\Definition\ResolveInfo;

/**
 * A GraphQL type for a WebformSubmissionOutputWrapper object.
 *
 * @GraphQLType(
 *   id = "webform_submission_error_wrapper",
 *   name = "WebformSubmissionErrorWrapper"
 * )
 */
class WebformSubmissionErrorWrapper extends TypePluginBase {

  /**
   * {@inheritdoc}
   */
  public function applies($object, ResolveContext $context, ResolveInfo $info) {
    return ($object instanceof WebformSubmissionErrorWrapperDataObject);
  }

}
