<template>  
   <nav>
        <ul class="nav-links">
            <!--<li><i class="fas fa-home"></i> Home</li>-->
            <li><router-link to="/"><i class="fas fa-tachometer-alt"></i> Dashboard</router-link></li>
            <li><router-link to="/pitch"><i class="fas fa-file-alt"></i>Manage Pitch</router-link></li>
            <li><router-link to="/investors"><i class="fas fa-user"></i>Investors</router-link></li>
            <li><router-link to="/agribusiness"><i class="fas fa-users"></i>Agribusinesses</router-link></li>
            <li> <router-link to="/deals"><i class="fas fa-briefcase"></i> Deals</router-link></li>
            <li><router-link to="/proposals"><i class="fas fa-file-signature"></i>Proposals</router-link></li>
            <!-- <li>
                <i class="fas fa-users"></i> Investors <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><router-link to="/"><i class="fas fa-user"></i> Investor</router-link></li>
                    <li><router-link to="/"><i class="fas fa-users"></i> Investor groups</router-link></li>
                </ul>
            </li>
            <li>
                <i class="fas fa-briefcase"></i> Deals <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><router-link to="/"><i class="fas fa-file"></i> All deals</router-link></li>
                    <li><router-link to="/"><i class="fas fa-chart-line"></i> Pipelines</router-link></li>
                    <li><router-link to="/"><i class="fas fa-tasks"></i> Pipeline view</router-link></li>
                </ul>
            </li>
            <li><router-link to="/"><i class="fas fa-file-invoice"></i> Invoices</router-link></li>
            <li>
                <i class="fas fa-file-signature"></i> Proposals <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><router-link to="/"><i class="fas fa-list"></i> Proposal list</router-link></li>
                    <li><router-link to="/"><i class="fas fa-file-alt"></i> Templates</router-link></li>
                </ul>
            </li>
            <li>
                <i class="fas fa-tasks"></i> Activities <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><router-link to="/"><i class="fas fa-calendar-alt"></i> Calendar View</router-link></li>
                    <li><router-link to="/"><i class="fas fa-list-alt"></i> Activity list</router-link></li>
                </ul>
            </li>
            <li>
                <i class="fas fa-money-bill"></i> Expenses <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><router-link to="/"><i class="fas fa-coins"></i> Expenses</router-link></li>
                    <li><router-link to="/"><i class="fas fa-map-marker-alt"></i> Area of Expenses</router-link></li>
                </ul>
            </li>
            <li>
                <i class="fas fa-chart-bar"></i> Report <i class="fas fa-caret-down"></i>
                <ul class="sub-links">
                    <li><router-link to="/"><i class="fas fa-chart-line"></i> Deals</router-link></li>
                    <li><router-link to="/"><i class="fas fa-file-alt"></i> Proposal</router-link></li>
                    <li><router-link to="/"><i class="fas fa-tasks"></i> Pipeline</router-link></li>
                </ul>
            </li>
            <li><router-link to="/"><i class="fas fa-users-cog"></i> Users & Roles</router-link></li>
            <li><router-link to="/"><i class="fas fa-cog"></i> Settings</router-link></li> -->
            
        </ul>
    </nav>
</template>