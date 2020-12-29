<x-layout.nav.navigation-list>
    <x-layout.nav.item icon="home" :route="route('home')" title="Home" :active="true == false" />
    <x-layout.nav.item icon="clock" :route="route('home')" title="History" :active="true == false" />
    <x-layout.nav.item icon="scale" :route="route('home')" title="Balances" :active="true == true" />
    <x-layout.nav.item icon="credit-card" :route="route('home')" title="Cards" :active="true == false" />
    <x-layout.nav.item icon="user-group" :route="route('home')" title="Recipients" :active="true == false" />
    <x-layout.nav.item icon="document-report" :route="route('home')" title="Reports" :active="true == false" />
</x-layout.nav.navigation-list>
<x-layout.nav.navigation-sub>
    <x-layout.nav.item icon="cog" :route="route('home')" title="Settings" :active="true == false" />
    <x-layout.nav.item icon="question-mark-circle" :route="route('home')" title="Help" :active="true == false" />
    <x-layout.nav.item icon="shield-check" :route="route('home')" title="Privacy" :active="true == false" />
</x-layout.nav.navigation-sub>
