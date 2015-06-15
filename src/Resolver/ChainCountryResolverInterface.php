<?php

/**
 * @file
 * Contains \Drupal\commerce\Resolver\ChainCountryResolverInterface.
 */

namespace Drupal\commerce\Resolver;

/**
 * Chain country resolver interface.
 *
 * Runs the added resolvers one by one until one of them returns the country.
 * Each resolver in the chain can be another chain, which is why this interface
 * extends the country resolver one.
 */
interface ChainCountryResolverInterface extends CountryResolverInterface {

  /**
   * Adds a resolver.
   *
   * @param \Drupal\commerce\Resolver\CountryResolverInterface $resolver
   *   The resolver.
   */
  public function addResolver(CountryResolverInterface $resolver);

}
