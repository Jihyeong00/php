import { faker } from '@faker-js/faker';
import shortid from 'shortid';

const FakerData = (number) => {
    return Array(number)
        .fill()
        .map(() => ({
            /* 1. 게시글 */
            // 아이디
            postId: shortid.generate(),
            // 제목
            postTitle: faker.lorem.sentence(),
            // 내용
            postContent: faker.lorem.paragraph(),
            // 회원 아이디
            postMemberId: shortid.generate(),
            // 회원 닉네임
            postNickname: faker.internet.userName(),
            // 회원 프로필이미지
            postProfileImage: faker.image.imageUrl(80, 40, true),
            // 업데이트 시간
            postUploadedTime: faker.date.past().toLocaleString(),
            myPost: false,
            /* 2. 슬라이드 */
            postSlides: Array(Math.floor(Math.random() * 5))
                .fill()
                .map(() => {
                    return {
                        // 번호
                        slideId: shortid.generate(),
                        // 내용
                        slideContent: faker.lorem.paragraph(),
                        // 이미지
                        slideImage: faker.image.imageUrl(80, 40, true),
                    };
                }),
            /* 3. 댓글 */
            poseComments: Array(Math.floor(Math.random() * 3))
                .fill()
                .map(() => {
                    return {
                        // 번호
                        commentId: shortid.generate(),
                        // 업데이트 시간
                        commentUpdateTime: faker.date.past().toLocaleString(),
                        // 회원 아이디
                        commentMemberId: shortid.generate(),
                        // 내용
                        commentContent: faker.lorem.paragraph(),
                        // 프로필 이미지
                        commentProfileImage: faker.image.imageUrl(80, 40, true),
                        myComment: false,
                    };
                }),
        }));
};

export default FakerData;
