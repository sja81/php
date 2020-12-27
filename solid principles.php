<?php
// SOLID

// Single response
// a class should have one, and only one, reason to change. 

// Open-Closed
// Entities should be open for extension, but closed for modification
// Change behavior without modifying source code
// avoid code rot
// polymorphism
// create hide extension to interface, like PaymentInterface

// Liskov substitution
// Derived classes must be substitutable for their base classes.

pathinfo($file, PATHINFO_EXTENSION);

// 1. signature must match
// 2. preconditions can't be greater
// 3. post conditions at least equal to 
// 4. exception types must match

// Interface segregation 
// a client should not be forced to implement an interface that it doesn't use

// Depend on abstractions, not on concreations.
// Dependency inversion doesn't equal DI
// All of this is about decoupling code
// High level code isn't as concerned with details.
// Low level code is more concerned with details and specifics.
