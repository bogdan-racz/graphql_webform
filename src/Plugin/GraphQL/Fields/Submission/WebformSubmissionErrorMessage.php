<?php

namespace Drupal\graphql_webform\Plugin\GraphQL\Fields\Submission;

use Drupal\graphql\GraphQL\Execution\ResolveContext;
use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use Drupal\graphql_webform\GraphQL\WebformSubmissionErrorWrapper;
use GraphQL\Type\Definition\ResolveInfo;

/**
 * Retrieve the form element machine name.
 *
 * @GraphQLField(
 *   secure = true,
 *   parents = {"WebformSubmissionErrorWrapper"},
 *   id = "webform_submission_error_message",
 *   name = "message",
 *   type = "String",
 * )
 */
class WebformSubmissionErrorMessage extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveContext $context, ResolveInfo $info) {
    if ($value instanceof WebformSubmissionErrorWrapper) {
      yield $value->getMessage();
    }
  }

}
