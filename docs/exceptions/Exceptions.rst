Exceptions
==========

Exceptions in your module
-------------------------

The ``graphql-base`` module provides the following exceptions you can use or extend from

============  ===============  ==================================================================================
Class         Category         Description
============  ===============  ==================================================================================
InvalidLogin  permissionerror  Thrown when we have an invalid login
InvalidToken  permissionerror  Thrown when a token is invalid
NotFound      requesterror     Thrown when a record was not found
Exists        requesterror     Thrown when a record exists (when we want to register already registered customer)
OutOfBounds   requesterror     Thrown when values are out of bounds
============  ===============  ==================================================================================

Exception to GraphQL Error
--------------------------

The GraphQL modules are build using `GraphQLite <https://graphqlite.thecodingmachine.io/docs#features>`_, which requires `graphql-php <https://webonyx.github.io/graphql-php/>`_. `Here <https://webonyx.github.io/graphql-php/error-handling/>`_ you can see how graphql-php handles errors.

In short: If you want the consumer to see the message of your exception, it needs to implement the ``GraphQL\Error\ClientAware`` interface.

Error categories
----------------

In the error response you might want to see a ``category`` entry, which describes the category of the error. You can use ``OxidEsales\GraphQL\Base\Exception\ErrorCategories`` class, which defines several error categories.

Example
-------

Here is an example of a custom exception which tells us that a product was not found. It is part of the ``graphql-storefront`` module.

.. literalinclude:: ../examples/exceptions/ProductNotFoundException.php
   :language: php

Here is an example of an exception when customer's password does not match the requirements:

.. literalinclude:: ../examples/exceptions/PasswordMismatchException.php
   :language: php

In this example you can see the usage of ``ClientAware`` and ``ErrorCategories``.
