<?php
namespace GovernmentData\Model;

trait GovernmentDataTrait
{
    public function setSubjectCategory($subjectCategory)
    {
        $this->subjectCategory = in_array(
            $subjectCategory, self::SUBJECT_CATEGORY
        ) ? $subjectCategory : self::SUBJECT_CATEGORY['NULL'];
    }

    public function getSubjectCategory()
    {
        return $this->subjectCategory;
    }

    public function setType(string $type) : void
    {
        $this->type = in_array(
            $type, self::TYPE
        ) ? $type : self::TYPE['NULL'];
    }

    public function getType() : string
    {
        return $this->type;
    }
}