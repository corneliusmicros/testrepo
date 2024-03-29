CREATE SEQUENCE s_survey;
CREATE SEQUENCE s_surveymetadata;
CREATE SEQUENCE s_surveyquestion;
CREATE SEQUENCE s_surveyquestionresult;
CREATE SEQUENCE s_surveyresult;
CREATE SEQUENCE s_surveyrelatedconfig;
CREATE SEQUENCE s_surveyquestionmetadata;

CREATE TABLE ezsurvey (
  id INTEGER NOT NULL,
  title VARCHAR2(255),
  enabled INTEGER DEFAULT 1 NOT NULL,
  valid_from INTEGER DEFAULT 0 NOT NULL,
  valid_to INTEGER DEFAULT 0 NOT NULL,
  redirect_cancel VARCHAR2(255),
  redirect_submit VARCHAR2(255),
  published INTEGER DEFAULT 0 NOT NULL,
  persistent INTEGER DEFAULT 0 NOT NULL,
  one_answer INTEGER DEFAULT 0 NOT NULL,
  contentobject_id INTEGER DEFAULT 0 NOT NULL,
  contentobjectattribute_id INTEGER DEFAULT 0 NOT NULL,
  contentobjectattribute_version INTEGER DEFAULT 0 NOT NULL,
  contentclassattribute_id INTEGER DEFAULT 0 NOT NULL,
  language_code VARCHAR2(20) DEFAULT NULL,
  PRIMARY KEY(id)
);
CREATE TABLE ezsurveyquestion (
  id INTEGER NOT NULL,
  survey_id INTEGER DEFAULT 0 NOT NULL,
  original_id INTEGER DEFAULT 0 NOT NULL,
  tab_order INTEGER DEFAULT 0 NOT NULL,
  mandatory INTEGER DEFAULT 1 NOT NULL,
  visible INTEGER DEFAULT 1 NOT NULL,
  type VARCHAR2(255),
  default_value CLOB,
  text CLOB,
  text2 CLOB,
  text3 CLOB,
  num INTEGER,
  num2 INTEGER,
  PRIMARY KEY(id)
);
CREATE TABLE ezsurveyresult (
  id INTEGER NOT NULL,
  survey_id INTEGER DEFAULT 0 NOT NULL,
  user_id INTEGER DEFAULT 0 NOT NULL,
  tstamp INTEGER DEFAULT 0 NOT NULL,
  user_session_id VARCHAR2(255),
  PRIMARY KEY(id)
);
CREATE TABLE ezsurveyquestionresult (
  id INTEGER NOT NULL,
  result_id INTEGER DEFAULT 0 NOT NULL,
  question_id INTEGER DEFAULT 0 NOT NULL,
  questionoriginal_id INTEGER DEFAULT 0 NOT NULL,
  text VARCHAR2(4000),
  PRIMARY KEY(id)
);
CREATE TABLE ezsurveymetadata (
  id INTEGER NOT NULL,
  result_id INTEGER DEFAULT 0 NOT NULL,
  attr_name VARCHAR2(255),
  attr_value VARCHAR2(255),
  PRIMARY KEY(id)
);
CREATE TABLE ezsurveyrelatedconfig (
    id INTEGER NOT NULL,
    contentclass_id INTEGER DEFAULT 1 NOT NULL,
    node_id INTEGER DEFAULT 0 NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE ezsurveyquestionmetadata (
    id INTEGER NOT NULL,
    result_id INTEGER DEFAULT 0 NOT NULL,
    question_id INTEGER DEFAULT 0 NOT NULL,
    question_original_id INTEGER DEFAULT 0 NOT NULL,
    name VARCHAR2(255),
    value CLOB,
    PRIMARY KEY(id)
);


CREATE OR REPLACE TRIGGER ezsurvey_id_tr
BEFORE INSERT ON ezsurvey FOR EACH ROW WHEN (new.id IS NULL)
BEGIN
  SELECT s_survey.nextval INTO :new.id FROM dual;
END;
/

CREATE OR REPLACE TRIGGER ezsurveymetadata_id_tr
BEFORE INSERT ON ezsurveymetadata FOR EACH ROW WHEN (new.id IS NULL)
BEGIN
  SELECT s_surveymetadata.nextval INTO :new.id FROM dual;
END;
/

CREATE OR REPLACE TRIGGER ezsurveyquestion_id_tr
BEFORE INSERT ON ezsurveyquestion FOR EACH ROW WHEN (new.id IS NULL)
BEGIN
  SELECT s_surveyquestion.nextval INTO :new.id FROM dual;
END;
/

CREATE OR REPLACE TRIGGER ezsurveyquestionresult_id_tr
BEFORE INSERT ON ezsurveyquestionresult FOR EACH ROW WHEN (new.id IS NULL)
BEGIN
  SELECT s_surveyquestionresult.nextval INTO :new.id FROM dual;
END;
/

CREATE OR REPLACE TRIGGER ezsurveyresult_id_tr
BEFORE INSERT ON ezsurveyresult FOR EACH ROW WHEN (new.id IS NULL)
BEGIN
  SELECT s_surveyresult.nextval INTO :new.id FROM dual;
END;
/

CREATE OR REPLACE TRIGGER ezsurveyrelatedconfig_id_tr
BEFORE INSERT ON ezsurveyrelatedconfig FOR EACH ROW WHEN (new.id IS NULL)
BEGIN
  SELECT s_surveyrelatedconfig.nextval INTO :new.id FROM dual;
END;
/

CREATE OR REPLACE TRIGGER ezsurveyquestionmetadata_id_tr
BEFORE INSERT ON ezsurveyquestionmetadata FOR EACH ROW WHEN (new.id IS NULL)
BEGIN
  SELECT s_surveyquestionmetadata.nextval INTO :new.id FROM dual;
END;
/

CREATE INDEX ezsurvey_contentobject_id_i ON ezsurvey (contentobject_id);
CREATE INDEX ezsurvey_contentobjectattribute_id_i ON ezsurvey (contentobjectattribute_id);
CREATE INDEX ezsurvey_contentobjectattribute_version_i ON ezsurvey (contentobjectattribute_version);
CREATE INDEX ezsurvey_contentclassattribute_id_i ON ezsurvey (contentclassattribute_id);
CREATE INDEX ezsurvey_language_code_i ON ezsurvey (language_code);
CREATE INDEX ezsurveymetadata_result_id_i ON ezsurveymetadata (result_id);
CREATE INDEX ezsurveymetadata_attr_name_i ON ezsurveymetadata (attr_name);
CREATE INDEX ezsurveymetadata_attr_value_i ON ezsurveymetadata (attr_value);
CREATE INDEX ezsurveyquestion_survey_id_i ON ezsurveyquestion (survey_id);
CREATE INDEX ezsurveyquestionresult_00040_i ON ezsurveyquestionresult (result_id);
CREATE INDEX ezsurveyquestionresult_00041_i ON ezsurveyquestionresult (question_id);
CREATE INDEX ezsurveyresult_survey_id_i ON ezsurveyresult (survey_id);