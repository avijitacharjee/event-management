<div class="modal fade" id="FFModal" tabindex="-1" aria-labelledby="FFModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="FFModalLabel">
                    Following & Followers
                </h5>
                <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="uil uil-multiply"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="model-content follow-people-content">
                    <div class="">
                        <ul class="nav nav-pills ff-tablist mb-2" role="tablist">
                            <li class="nav-item d-flex me-4">
                                <a class="nav-link px-0 pt-0 pb-3 active" id="pills-following-tab" data-bs-toggle="pill"
                                    href="{{ url('#following') }}" role="tab" aria-controls="following"
                                    aria-selected="true">Following
                                    <span class="following_count">(2)</span></a>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link px-0 pt-0 pb-3" id="pills-followers-tab" data-bs-toggle="pill"
                                    href="{{ url('#followers') }}" role="tab" aria-controls="followers"
                                    aria-selected="false">Followers
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade active show" id="following" role="tabpanel"
                                aria-labelledby="pills-following-tab">
                                <div class="users-list min-height-430">
                                    <div class="user-follow-card mb-4">
                                        <div class="follow-card-left">
                                            <div class="follow-avatar">
                                                <img src="{{ asset('/asset/barren/images/profile-imgs/img-2.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="follow-name">
                                                <h5>Jassica William</h5>
                                                <span>1 Follower</span>
                                            </div>
                                        </div>
                                        <div class="follow-card-btn">
                                            <button class="follow-btn">
                                                Following
                                            </button>
                                        </div>
                                    </div>
                                    <div class="user-follow-card mb-4">
                                        <div class="follow-card-left">
                                            <div class="follow-avatar">
                                                <img src="{{ asset('/asset/barren/images/profile-imgs/img-1.jpg') }}"
                                                    alt="" />
                                            </div>
                                            <div class="follow-name">
                                                <h5>Rock Smith</h5>
                                                <span>3 Followers</span>
                                            </div>
                                        </div>
                                        <div class="follow-card-btn">
                                            <button class="follow-btn">
                                                Following
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="followers" role="tabpanel"
                                aria-labelledby="pills-followers-tab">
                                <div id="followers-empty-state"
                                    class="d-flex align-items-center justify-content-center flex-column min-height-430">
                                    <span>
                                        <svg width="60" height="47" viewBox="0 0 60 47" fill="none">
                                            <path
                                                d="M41.8884 39.501C41.2649 38.8161 41.1572 37.7618 41.9808 37.0461L48.8852 30.1433C50.44 28.5811 52.8108 30.9436 51.2559 32.4981L47.1225 36.6306H56.1899C56.467 35.6917 56.644 35.0145 56.644 34.0064C56.644 28.0732 50.5247 24.6256 45.152 24.6256C40.9724 24.6256 36.4387 26.5956 34.5067 30.4819C36.5234 33.0521 37.7088 36.138 37.7088 39.4702C37.7088 41.6788 37.1623 43.8566 36.1693 45.8267C35.1918 47.7967 32.1976 46.3038 33.1828 44.3337C33.9525 42.8023 34.3528 41.1863 34.3528 39.4702C34.3528 31.4515 26.1321 26.7188 18.8505 26.7188C11.5767 26.7188 3.36369 31.4515 3.36369 39.4702C3.36369 41.2017 3.74856 42.7793 4.52598 44.326C5.51892 46.2961 2.5247 47.7967 1.53945 45.8344C0.546504 43.8643 0 41.6711 0 39.4702C0 32.3749 5.23412 26.8573 11.6228 24.5948C7.8127 22.1322 5.49583 17.9151 5.49583 13.3594C5.49583 5.98709 11.4843 0 18.8505 0C26.2322 0 32.2207 5.98709 32.2207 13.3594C32.2207 17.9228 29.8961 22.1322 26.086 24.5948C28.3412 25.3874 30.3656 26.5495 32.0744 27.9808C33.6369 25.4798 36.0616 23.6098 38.7787 22.5016C36.1001 20.4854 34.5221 17.3533 34.5221 13.9904C34.5221 8.11875 39.2867 3.35524 45.152 3.35524C51.0327 3.35524 55.7896 8.11105 55.7896 13.9904C55.7896 17.3533 54.2117 20.4931 51.5253 22.5016C56.2668 24.4332 60 28.6811 60 34.0064C60 34.8683 59.8922 35.7379 59.6921 36.5921C59.492 37.4386 59.1841 38.262 58.7838 39.0623C58.4913 39.6472 57.9063 39.9858 57.2906 39.9858L47.1302 39.9935L51.2559 44.1183C52.8185 45.6805 50.4477 48.0507 48.8852 46.4885L41.8884 39.501ZM18.8505 3.36293C13.3239 3.36293 8.85183 7.83401 8.85183 13.3594C8.85183 18.9001 13.3085 23.3481 18.8505 23.3481C24.3926 23.3481 28.857 18.9001 28.857 13.3594C28.857 7.84171 24.3772 3.36293 18.8505 3.36293ZM45.152 6.71047C41.1418 6.71047 37.8781 9.97336 37.8781 13.9904C37.8781 18.0152 41.1341 21.255 45.1597 21.255C49.1931 21.255 52.4336 18.0228 52.4336 13.9904C52.4336 9.97336 49.1777 6.71047 45.152 6.71047Z"
                                                fill="#6ac045"></path>
                                        </svg>
                                    </span>
                                    <p class="font-16 mt-4 text-light3">
                                        No followers yet
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
