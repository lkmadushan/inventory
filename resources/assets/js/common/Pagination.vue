<template>
    <div>
        <nav>
            <ul class="pagination">
                <li :class="{'disabled': currentPage <= 1}">
                    <a href="#" @click.prevent="changePage(currentPage - 1)" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li v-for="page in pages"
                    track-by="$index"
                    :class="{'active': isCurrentPage(page), 'disabled': isNaN(page)}">
                    <span v-if="isNaN(page)">{{ page }}</span>
                    <a v-else href="#" @click.prevent="changePage(page)">{{ page }}</a>
                </li>
                <li :class="{'disabled': currentPage >= lastPage}">
                    <a href="#" @click.prevent="changePage(currentPage + 1)" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                onEachSide: 3,
                dots: '...'
            }
        },

        props: {
            pagination: {
                type: Object,
                required: true
            },

            callback: {
                type: Function,
                required: true
            }
        },

        computed: {
            pages() {
                if (this.lastPage < (this.onEachSide * 2) + 6) {
                    return this.smallPageSlider();
                }

                return this.pageSlider();
            },

            currentPage() {
                return this.pagination.current_page;
            },

            lastPage() {
                return this.pagination.last_page;
            }
        },

        methods: {
            changePage(page) {
                if (page < 1 || page > this.lastPage) return;

                this.callback(page);
            },

            isCurrentPage(page) {
                return page == this.currentPage;
            },

            pageSlider() {
                var window = this.onEachSide * 2;

                if (this.currentPage <= window) {
                    return this.pagesTooCloseToBeginning(window);
                }

                if (this.currentPage > (this.lastPage - window)) {
                    return this.pagesTooCloseToEnding(window);
                }

                return this.fullPageSlider();
            },

            pagesTooCloseToBeginning(window) {
                return this.pageRange(1, window + 1)
                           .concat(this.dots)
                           .concat(this.finishPages());
            },

            pagesTooCloseToEnding(window) {
                var last = this.pageRange(
                    this.lastPage - (window + 2), this.lastPage
                );

                return this.startPages()
                           .concat(this.dots)
                           .concat(last);
            },

            fullPageSlider() {
                return this.startPages()
                           .concat(this.dots)
                           .concat(this.adjacentPages())
                           .concat(this.dots)
                           .concat(this.finishPages());
            },

            smallPageSlider() {
                return this.pageRange(1, this.lastPage);
            },

            startPages() {
                return this.pageRange(1, 2);
            },

            finishPages() {
                return this.pageRange(this.lastPage - 1, this.lastPage);
            },

            adjacentPages() {
                return this.pageRange(
                    this.currentPage - this.onEachSide, this.currentPage + this.onEachSide
                );
            },

            pageRange(start, end) {
                var pages = [];

                for (var page = start; page <= end; page++) {
                    pages.push(page);
                }

                return pages;
            }
        }
    }
</script>
