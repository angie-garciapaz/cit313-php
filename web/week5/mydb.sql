CREATE TABLE scriptures(
id SERIAL PRIMARY KEY,
book TEXT,
chapter TEXT,
verse TEXT,
content TEXT
);

INSERT INTO scriptures(
    book, chapter, verse, content
)
VALUES('Mosiah','16','9', 'He is the alight and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.')

SELECT * FROM scriptures