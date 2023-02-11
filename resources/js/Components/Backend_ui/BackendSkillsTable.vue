<template>
    <div class="flex justify-center">
        <table class="mt-5 border-separate border-spacing-6">
            <thead>
                <tr>
                    <th colspan="4">
                        <h2>Skills</h2>
                    </th>
                </tr>
            </thead>
            <tbody>
                <template v-for="item in data" :key="item.id">
                    <tr>
                        <td>{{ item.id }}</td>
                        <td>{{ item.skill }}</td>
                        <td>{{ item.level }}</td>
                        <td><Link>Edit</Link></td>
                        <td><Link>Delete</Link></td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
    props: {
        data: Object,
    },
};
</script>

<style></style>
