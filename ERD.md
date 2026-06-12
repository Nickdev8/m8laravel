# ERD

```mermaid
erDiagram
    CATEGORY ||--o{ TSHIRT : has
    COLOR ||--o{ TSHIRT : has

    CATEGORY {
        bigint id PK
        string name
    }

    COLOR {
        bigint id PK
        string name
    }

    TSHIRT {
        bigint id PK
        string text_line_1
        string text_line_2
        string image_path
        bigint category_id FK
        bigint color_id FK
    }
```
