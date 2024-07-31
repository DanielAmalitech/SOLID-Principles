# SOLID-Principles

The SOLID principles are a set of design principles that help developers create more maintainable, understandable, and flexible software. These principles were introduced by Robert C. Martin, also known as Uncle Bob. SOLID is an acronym that stands for:

1. **Single Responsibility Principle (SRP)**
2. **Open/Closed Principle (OCP)**
3. **Liskov Substitution Principle (LSP)**
4. **Interface Segregation Principle (ISP)**
5. **Dependency Inversion Principle (DIP)**

Let's break down each principle:

### 1. Single Responsibility Principle (SRP)
**Definition:** A class should have only one reason to change, meaning it should have only one job or responsibility.

**Explanation:** This principle emphasizes that a class should only have one responsibility or functionality. By ensuring a class has only one responsibility, you reduce the risk of changes in one part of the code affecting other parts.

**Example:** If you have a `User` class that handles both user authentication and user profile management, it's better to split it into two classes: `UserAuthentication` and `UserProfile`.

### 2. Open/Closed Principle (OCP)
**Definition:** Software entities (classes, modules, functions, etc.) should be open for extension but closed for modification.

**Explanation:** This principle suggests that you should be able to add new functionality to a class without modifying its existing code. This can be achieved through inheritance, interfaces, and composition.

**Example:** Instead of modifying a class to add new features, you can create new subclasses that extend the existing class.

### 3. Liskov Substitution Principle (LSP)
**Definition:** Objects of a superclass should be replaceable with objects of a subclass without affecting the correctness of the program.

**Explanation:** This principle ensures that a subclass can stand in for its superclass without causing errors or unexpected behavior. The subclass should enhance the behavior of the superclass, not contradict it.

**Example:** If you have a `Bird` class with a `fly` method, and a `Penguin` class that inherits from `Bird`, the `Penguin` class should not override `fly` in a way that breaks the expectations set by the `Bird` class.

### 4. Interface Segregation Principle (ISP)
**Definition:** A client should not be forced to depend on interfaces it does not use.

**Explanation:** This principle advises against creating large, monolithic interfaces. Instead, it's better to create smaller, more specific interfaces so that implementing classes only need to be concerned with the methods that are relevant to them.

**Example:** Instead of having one large interface `Animal` with methods `run`, `fly`, and `swim`, you can have smaller interfaces like `Runnable`, `Flyable`, and `Swimmable`.

### 5. Dependency Inversion Principle (DIP)
**Definition:** High-level modules should not depend on low-level modules. Both should depend on abstractions. Abstractions should not depend on details. Details should depend on abstractions.

**Explanation:** This principle suggests that both high-level and low-level modules should depend on abstractions (e.g., interfaces) rather than concrete implementations. This promotes loose coupling and makes the system more flexible and easier to maintain.

**Example:** Instead of a `Database` class depending on a specific `MySQLDatabase` class, it should depend on an interface `IDatabase` that `MySQLDatabase` implements. This way, you can easily switch to a different database implementation without changing the high-level module.

By adhering to these principles, you can create software that is easier to understand, maintain, and extend.
