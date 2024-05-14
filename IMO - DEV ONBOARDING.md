RINGIER SA

IMOBILIARE DEV ONBOARDING

T1 2022 / \#imo-dev-onboarding

# INTRO

We’re excited to be Kicking off your new CUBE learning journey! Our aim
is to get you up-skilled, confident, and productive on the new stack as
soon as possible!  
  
The CUBE stack is made up of layering more than 7 years of
marketplace-specific implementation on top of a foundation of open
source and community technologies and approaches.

Therefore, the best way to get productive on the CUBE stack is to start
with getting familiar, and confident with the public, community-driven
tooling that drives CUBE.  
  
Although many members of our team have a leaning towards either frontend
or backend, we prefer for all members to have the foundations of Laravel
covered (both FE and BE). In addition, ***familiarity*** with the other
parts of the stack is encouraged to get a full understanding (Livewire,
Tailwind, Inertia), even if full proficiency is not required (e.g. if
you’re a BE dev)  
  
We’ll be breaking the onboarding into three phases.

**Phase 1: Open Source tech self-study**

**Phase 2: CUBE-specific implementation.**

**Phase 3: Specialisation and finding your fit.**

In Parallel to the above, we’ll be onboarding you onto Slack, Atlassian,
Github, VPN and other essential services on CUBE.

#  

# PHASE 1: OPEN SOURCE SELF STUDY

During this phase, we’re not opinionated on your local dev environment
setup. Use what works for you! If you are stuck, reach out!

We’ll have a specific Slack channel for questions, comments, and help.
We’ll also be doing a daily “stand-up” for quick check-ins on how the
self-study is going.

## Primary Tasks

1.  Laravel

    1.  Laravel From Scratch
        > [<u>Series</u>](https://laracasts.com/series/laravel-8-from-scratch)

    2.  Testing Laravel
        > [<u>Series</u>](https://laracasts.com/series/phpunit-testing-in-laravel)

2.  Tailwind

    1.  Official Youtube videos (From [<u>Zero to
        > Production</u>](https://www.youtube.com/watch?v=elgqxmdVms8&list=PL5f_mz_zU5eXWYDXHUDOLBE0scnuJofO0))

    2.  Laracasts
        > [<u>Series</u>](https://laracasts.com/series/tailwind-css-rebuilds-github)

3.  VueJS (CRM tool)

    1.  Vue 2 Step by step
        > [<u>series</u>](https://laracasts.com/series/learn-vue-2-step-by-step)

    2.  Whats new in Vue 3
        > [<u>series</u>](https://laracasts.com/series/whats-new-in-vue-3)

4.  InertiaJS (CRM tool)

    1.  Laracasts
        > [<u>Series</u>](https://laracasts.com/series/build-modern-laravel-apps-using-inertia-js)

5.  Livewire & AlpineJs (Frontend application / platform)

    1.  Livewire Basics
        > [<u>Series</u>](https://laracasts.com/series/livewire-basics)

    2.  Livewire Official
        > [<u>Screencast</u>](https://laravel-livewire.com/screencasts/installation)

6.  Nova (Admin)

    1.  Laravel Nova Mastery
        > [<u>Series</u>](https://laracasts.com/series/laravel-nova-mastery)

## Bonus Tasks

Depending on your specialization, and time available, you can dig
further into the following. Please reach out to Dylan/Kyle to get access
to paid courses.

1.  All Devs

    1.  [<u>Test Driven
        > Laravel</u>](https://course.testdrivenlaravel.com/)

    2.  [<u>Laravel Beyond CRUD</u>](https://laravel-beyond-crud.com/)

2.  Backend

    1.  Building APIS you won’t hate eBook

    2.  [<u>Eloquent Performance
        > Patterns</u>](https://eloquent-course.reinink.ca/)

3.  Frontend

    1.  Additional Videos from
        > [<u>TailwindLabs</u>](https://www.youtube.com/c/TailwindLabs/videos)

## Definition of Done:

- Build the Project defined at the end of this document (Project 1)

- Understand the different technologies used in the CUBE stack, from an
  > open-source/public perspective.

- Be confident in the structure and approach of a standard Laravel
  > application

- Full Familiarity with how Laravel works with Blade templating.

# PHASE 2: CUBE SPECIFIC IMPLEMENTATION

TBC Based on progress with Phase 1.

#  

# PROJECT 1

## PART 1: BUILD A BASIC APPLICATION

Get familiar with local dev Laravel, Git Trunk based development, Blade
& Tailwind CSS.

Build a marketplace with the following features:

- a way to sign-up/sign-in, as a seller

- a way to create new listings, browse, and edit existing listings; as a
  > seller

- a way to browse listings, as a buyer

- a way to search for specific listings, as a buyer (basic SQL search is
  > sufficient)

The marketplace needs to adhere to the following:

- Must be built in a recent version of the Laravel framework

- Must be styled using the Tailwind CSS framework

This code should be part of a GitHub repository, where the stable
version of the marketplace is in the main branch; and features are added
via branches and pull requests.

Try to make the commit messages and branch names as clear as possible.
The goal should be to be able to see clear progress through nothing more
than commit messages.

PART 2: REFACTOR TO USE LIVEWIRE  
  
Extend the marketplace to:

\- have multiple categories and fields from which to search; where
filters can cascade

\- use Livewire to populate those options/filters

\- use Alpine JS to show/hide options/filters

\- have a less-complex feature that also uses Livewire and Alpine

*For example:*

Your marketplace can have top-level categories; like
home/office/sports/outdoors. These can have their own
sub-categories/filters; like home → kitchen, office → stationary etc.

When a buyer changes from home to office, the sub-categories/filters
should reflect the new options in a way that makes use of Livewire.

These changes may also be handled through a mixture of Livewire and
Alpine JS. A good example of this is loading the contextual
sub-categories/filters through Livewire (from a database, perhaps); but
keeping the selected options in sync for multiple search forms, at the
same time.

For the less-complex feature; implement something like a multistep
contact form, that persists data to the server but does a few requests
to the server as possible. In other words, use Livewire for the data
transfer, but Alpine JS for the interface changes that don’t require
data transfer.

PART 3: REFACTOR TO USE INERTIA JS
