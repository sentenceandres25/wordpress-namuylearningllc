# Namuy Learning

**Namuy Learning** is an e-learning and e-commerce platform developed to combine online education, educational content, and products that support learning initiatives within a single digital ecosystem.

The platform is built on **WordPress** and integrates a Learning Management System, e-commerce functionality, donations, shipping, content publishing, and custom front-end improvements.

🌐 **Live website:**  
https://namuylearning.com/

---

## About the Project

Namuy Learning is a real-world educational platform designed to provide accessible learning experiences while integrating the technical infrastructure required to manage courses, products, users, orders, donations, and educational content.

The platform currently brings together several functional areas:

- Online courses
- Lessons, topics, and quizzes
- Educational resources
- Physical products
- Shopping cart and checkout
- Shipping calculation
- Donations
- Blog and educational content
- User accounts
- Responsive web experiences

Rather than being a static website, Namuy Learning is an evolving platform that combines **learning management, e-commerce, content management, integrations, and custom web development**.

---

## Portfolio: My Implementation Work

**Role:** WordPress platform implementation and front-end customization — Jimmy Ordóñez.

I bring the learning, store, donation, and content tools together in one branded WordPress experience. My contribution covers platform configuration, page and content organization, integration setup, and site-specific HTML, CSS, and JavaScript enhancements. WordPress, Kadence, LearnDash, WooCommerce, and the other vendor components retain their respective authorship.

### Concrete Contributions and Notable Customizations

| Area | My implementation work | Visible result / review evidence |
| --- | --- | --- |
| Site experience | Assembled Kadence layouts and customized page sections, navigation, and calls to action for learning and shopping. | The [homepage](https://namuylearning.com/) provides entry points to both courses and physical products within the same site. |
| Learning platform | Organized the LearnDash course directory, course presentation, and lesson hierarchy. | The [course directory](https://namuylearning.com/our-courses/) links to a course page with curriculum and access controls. |
| Commerce and shipping | Configured WooCommerce product information, attributes, stock, cart, and checkout, with Envia.com shipping-rate functionality. | The [ramen dining set page](https://namuylearning.com/product/anime-inspired-ramen-dining-set/) exposes dimensions, availability, purchase controls, and destination-based shipping guidance. |
| Product presentation | Customized the short and full product descriptions with structured HTML/CSS sections, product details, shipping explanations, and policy links. Added a two-part YouTube product tour with video-selection controls and direct viewing links. | Buyers can review the set and both videos from the product page before proceeding to purchase. |

### Key Architecture Decisions

| Decision | Rationale and tradeoff |
| --- | --- |
| Use WordPress as the shared CMS, with LearnDash for learning, WooCommerce for commerce, and GiveWP for donations. | Keeps content and administration in one environment while assigning each workflow to an established plugin. Ongoing maintenance includes checking compatibility across the theme and plugins. |
| Combine editable Kadence layouts with targeted front-end customizations. | Keeps routine content updates within WordPress while allowing tailored product sections and media controls. Custom styling and interactions need checks within the surrounding theme and WooCommerce layout. |
| Request shipping rates through Envia.com in the WooCommerce purchase flow. | Lets customers review destination-dependent shipping as part of the order total. Available rates depend on the address and supported shipping options; product-page copy explains this dependency. |
| Host videos on YouTube and integrate them into WordPress pages. | Keeps video publishing separate from page editing and provides direct viewing links alongside the embedded experience. Playback depends on the external video service. |

### Current Production Scope and Outcomes

**Public-site review: October 23, 2026.**

- **Published experience:** a branded homepage, course directory, course detail and access interface, and a physical-product page with stock, add-to-cart controls, custom content, and two product videos.
- **Learning availability:** [Build & Ship Modern APIs](https://namuylearning.com/courses/build-ship-modern-apis-fastapi-postgresql-docker-ci-cd-with-security/) is publicly listed, and its page currently states that enrollment is closed. The published curriculum description does not establish that every planned lesson is available.
- **Commerce scope:** the product page describes shipping calculation through Envia.com in the cart and at checkout. This public-page review did not validate live carrier quotes, payment processing, or completed orders.
- **Additional documented capabilities:** GiveWP donations, user accounts, and blog/content publishing are part of the platform setup described in this README. Their presence in the stack does not establish current public availability or transaction volume.

The observable outcome is one live site that connects course discovery with physical-product shopping and presents product details, videos, shipping guidance, and purchase policies in context. No sales, enrollment, donation, conversion, or performance figures are claimed here.

### Repository Evidence and Privacy Boundary

The repository includes a WordPress file snapshot under [public_html](public_html/), including vendor components. WordPress page content, block layouts, plugin settings, and embedded snippets can also reside in the database; the repository alone is not a complete reproduction of the current live platform. Use the public links above to evaluate the current presentation.

This portfolio section documents implementation responsibilities and public behavior. Credentials, API keys, license information, private administration settings, and customer, order, or donor records are excluded from the examples.

---

## Technology Stack

The platform currently uses:

### Core Platform

- **WordPress** — Content Management System
- **Kadence** — Theme and layout ecosystem

### Learning Management

- **LearnDash** — Courses, lessons, topics, quizzes, and learning experiences

### E-Commerce

- **WooCommerce** — Products, cart, checkout, customer data, and order management
- **Envia.com integration** — Shipping-rate functionality for the purchasing process

### Donations

- **GiveWP** — Donation functionality for educational initiatives

### Front-End Customization

- **HTML5**
- **CSS3**
- **JavaScript**

### Content and Media

- WordPress content management
- YouTube video integration
- Educational blog content

---

## Platform Architecture

At a functional level, Namuy Learning is structured around several connected systems:

```text
Namuy Learning
│
├── WordPress
│
├── Kadence
│   ├── Page layouts
│   ├── Responsive sections
│   ├── Navigation
│   └── UI customization
│
├── LearnDash
│   ├── Courses
│   ├── Lessons
│   ├── Topics
│   ├── Quizzes
│   └── Learning resources
│
├── WooCommerce
│   ├── Products
│   ├── Product pages
│   ├── Cart
│   ├── Checkout
│   ├── Customer information
│   ├── Orders
│   └── Shipping
│
├── Envia.com
│   └── Shipping-rate integration
│
├── GiveWP
│   └── Donations
│
├── Blog
│   ├── Educational content
│   ├── Technology content
│   └── Course-related content
│
├── User Accounts
│
└── Custom Development
    ├── HTML
    ├── CSS
    └── JavaScript
```
