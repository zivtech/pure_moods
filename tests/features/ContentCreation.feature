@d8 @api
Feature: Creating Basic Content
  As a Site Admin
  I am able to log in
  And publish content on the site

Scenario: As an Administrator I should be able to create Basic Page content
  Given I am logged in as a user with the "administrator" role
  When I visit "node/add/page"
   And I fill in "Title" with "My test content"
   And I fill in "Body" with "This is test content."
   And I press "Save"
  Then I should see "test content."
